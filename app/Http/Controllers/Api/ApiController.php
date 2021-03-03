<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            ->get();
        return $tienda;
        
    }

    public function producto($id){
        $producto = Producto::where("id",$id)
            ->with("tienda")
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

        $categorias = Categoria::with(array('productos' => function($query)
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
            "categorias" => $categorias
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

    public function register(Request $request){
        dd($request);// $request;//("avatar")->getClientOriginalName();
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
                return [
                    "status" => true
                ];
            }
        }
    }

}
