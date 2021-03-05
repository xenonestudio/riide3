<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Validator;
use App\CategoriaTienda;
use App\Categoria;
use App\Tienda;
use App\Destacado;
use App\Producto;
use App\Horario;
use App\Calificacione;
use App\User;
use App\Cartelera;


class ApiController extends Controller
{
    public function categorias(){

        $banners = Cartelera::where("pantalla_id",1)->with("pancartas")->get();
        //return $banners;

        $categorias = Categoria::where("categoria_id",null)->get();
        $arrayCategorias = [];
        foreach( $categorias as $cat ){
            $arrayCategorias[] = [
                "id" => $cat->id,
                "categoria" => $cat->categoria,
                "imagen" => $cat->imagen,
                "tiendas" => CategoriaTienda::where("categoria_id",$cat->id)->count()
            ];
            
        }
        return [
            "cartelera" => $banners,
            "categorias" => $arrayCategorias
        ];
    }

    public function tiendasPorCategoria($id){
        $categorias = Categoria::where("categoria_id",$id)->with(array("tiendas" => function($q){
            $q->with(array(
                "horario" => function($qh){
                    $qh->where("horarios.dia",date("N"));
                },
                "calificacion"));
         }))->get();
        return $categorias;
    }

    public function loMasHot(){
        $destacados = Destacado::with( array("categoria" =>function($query){
            $query->with( array( "productos" => function($qp){
                $qp->where("aceptado",1);
            }));
        }))
            ->with(array("cartelera" => function($qc){
                $qc->with("pancartas");
            }))
            ->get();
        return $destacados;
        
        
        /*$data = Destacado::all();//[0]->cartelera()->get()[0]->pancartas()->get();
        //return "dfhgd";
        $array = [];
        for($x = 0 ; $x < count( $data ) ; $x++){
            //return $data[$x]->cartelera()->get();
            //return $data[$x]->cartelera()->get()[0]->pancartas()->get();
            if( $data[$x]->cartelera_id != null ){
                $array[] = [
                    "type" => "banner",
                    "data" => $data[$x]->cartelera()->get()[0]->pancartas()->get()
                ];
            }
            if( $data[$x]->categoria_id != null ){
               // return $data[$x]->categoria()->get();
                $array[] = [
                    "tipo" => "categoria",
                    "categoria" => $data[$x]->categoria()->get()[0]->categoria,
                    "data" => $data[$x]->categoria()->get()[0]->productos()->where("destacado",1)->get()//cartelera()->get()[0]->pancartas()->get()
                ];
            }
        }
        return $array;*/
    }

    public function tienda($id){
        $tienda = Tienda::where("id",$id)
            ->with("productos")
            ->with("categorias")
            ->with("calificacion")
            ->with(["horario" => function($query){
                $query->where("dia",date("N"));
            }])
            ->get();
        return $tienda;
        
    }

    public function producto($id){
        $producto = Producto::where("id",$id)
            ->with(["tienda"=> function($query){
                $query->with("productos");
            } ])
            ->get();

        return $producto;
    }

    

    public function promociones(){
        /*$data = Categoria::with(array('productos' => function($query)
        {
             $query->where('productos.precio_b', "!=",null);
        }))
        ->get();*/

        $banners = Cartelera::where("pantalla_id",3)->with("pancartas")->get();

        $tiendas = Tienda::with(array('productos' => function($query)
        {
             $query->where('productos.precio_b', "!=",null)->with(array("tienda" => function($q){
                $q->with( array(
                    "horario" => function($qh){
                        $qh->where("horarios.dia",date("N"));
                    },
                    "calificacion"));
             }));
        }))
        ->get();

        return [
            "cartelera" => $banners,
            "tiendas" => $tiendas
        ];
        //return $categorias;
        //return $data;
    }

    public function search($search){
        $search = implode(" ", explode(",",$search) );
        
        $productos = Producto::where("producto","like","%$search%")
            ->orderBy("tienda_id")
            ->with("tienda")
            ->get();
        return $productos;
    }

    /*public function register(Request $request){
        
        //dd($request);// $request;//("avatar")->getClientOriginalName();
        if( (int)$request->input("type") == 5 ){
            $data = User::where("email",$request->input("email"))->count();
            
            if( $data == 0 ){
                $user = new User;
                $user->name = $request->input("name");
                $user->email = $request->input("email");
                $user->password = Hash::make($request->input("password"));
                $user->phone = $request->input("phone");
                $user->role_id = 5;
                $user->save();

                $tienda = new Tienda;
                $tienda->tienda_id = $user->id;
                $tienda->save();

                $calificacion = new Calificacione;
                $calificacion->calificacion = 5;
                $calificacion->tienda_id = $tienda->id;
                $calificacion->save();

                return [
                    "status" => true
                ];
            }
        }

        return dd($request);
    }*/

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }
    public function getAuthenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                    return response()->json(['user_not_found'], 404);
            }
            } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
                    return response()->json(['token_expired'], $e->getStatusCode());
            } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
                    return response()->json(['token_invalid'], $e->getStatusCode());
            } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
                    return response()->json(['token_absent'], $e->getStatusCode());
            }
            return response()->json(compact('user'));
    }

    public function register(Request $request)
        {
                /*$validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);

            if($validator->fails()){
                    return response()->json($validator->errors()->toJson(), 400);
            }*/
            
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->role_id = 3;
            $user->save();
           $token = JWTAuth::attempt($request->only('email', 'password'));
           return response()->json(compact("token"),201);
        }

        public function a(Request $request){
            //return $request;
            dd( $request->file() );
            $request = request();
            if( $request->file('image') ){
                $profileImage = $request->file('image');
                $profileImageSaveAsName = time() . "-profile." . $profileImage->getClientOriginalExtension();
    
                $upload_path = 'img/';
                $profile_image_url = $upload_path . $profileImageSaveAsName;
                $photo = $profile_image_url;
                $success = $profileImage->move($upload_path, $profileImageSaveAsName);
            }
            return "hola";
        }

        public function destacado(){
            return view("destacados.destacados");
        }

}
