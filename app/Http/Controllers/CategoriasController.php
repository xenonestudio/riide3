<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\CategoriaTienda;
use App\Categoria;
use App\Tienda;
use App\Destacado;
use App\Producto;
use App\Horario;
use App\Calificacione;
use App\User;
use App\Cartelera;

class CategoriasController extends Controller
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
        /*return [
            "cartelera" => $banners,
            "categorias" => $arrayCategorias
        ];*/

        $cartelera = $banners;
        $categorias = $arrayCategorias;
        
        return view("categorias",compact("cartelera","categorias"));
    }

    public function subcategorias($id){
        $banners = Cartelera::where("pantalla_id",2)->with("pancartas")->get();
        $cartelera = $banners;
        $categorias = Categoria::where("categoria_id",$id)->orWhere("id",$id)->with(array("tiendas" => function($q){
            $q->with(array(
                "horario" => function($qh){
                    $qh->where("horarios.dia",date("N"));
                },
                "calificacion"));
         }))->get();

         

        return view("subcategorias",compact("cartelera","categorias"));
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
        return view("tienda",compact("tienda"));
        
    }

    public function producto($id){
        $producto = Producto::where("id",$id)
            ->with(["tienda"=> function($query){
                $query->with("productos")->with("calificacion")->with("horario");
            }])
            
            ->get();
            //return $producto;
        return view("productos",compact("producto"));
    }

    public function loMasHot(){
        //$r = new Route;
        //dd( Route::current()->getName() );

        $categorias = Categoria::where("categoria_id",null)->get();

        $destacados = Destacado::with( array("categoria" =>function($query){
            $query->with( array( "productos" => function($qp){
                $qp->where("aceptado",1)->with(array("tienda" => function($qt){
                    $qt->with( array("horario" => function($qh){
                        $qh->where("horarios.dia",date("N"));
                    }));
                }));
            }));
        }))
            ->with(array("cartelera" => function($qc){
                $qc->with("pancartas");
            }))
            ->get();

        //dd(compact("destacados","categorias"));

        return view("loMasHot",compact("destacados","categorias"));
    }

    public function promociones(){
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
        },"calificacion"))
        ->get();

        return view("promociones",[
            "cartelera" => $banners,
            "tiendas" => $tiendas
        ]);
        /*return [
            "cartelera" => $banners,
            "categorias" => $categorias
        ];*/
    }

    public function search($search){
        $banners = Cartelera::where("pantalla_id",5)->with("pancartas")->get();
        $search = implode(" ", explode("-",$search) );
       
        $productos = Producto::where("producto","like","%$search%")
            ->orderBy("tienda_id")
            ->with("tienda")
            ->get();
        $cartelera = $banners;
        $tiendas = $productos;
        return view("search",compact("cartelera","tiendas" ));
    }

    public function searchTienda($id,$search){
        $search = implode(" ", explode("-",$search) );
        $productos = Producto::where("producto","like","%$search%")->where("tienda_id",$id)
            ->get();

        $tienda = Tienda::where("id",$id)
            ->with("categorias")
            ->with("calificacion")
            ->with(["horario" => function($query){
                $query->where("dia",date("N"));
            }])
            ->get();

        if( count($tienda) > 0 ){
            $tienda[0]->productos =  $productos;
        } else {
            return redirect("/categorias");
        }
        
        
        return view("search-tienda",compact("tienda"));
    }

}
