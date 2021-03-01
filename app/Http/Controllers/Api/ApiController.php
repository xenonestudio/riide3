<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CategoriaTienda;
use App\Categoria;
use App\Tienda;
use App\Destacado;

class ApiController extends Controller
{
    public function categorias(){
        $categorias = Categoria::where("categoria_id",null)->get();
        $arrayCategorias = [];
        foreach( $categorias as $cat ){
            $arrayCategorias[] = [
                "id" => $cat->id,
                "categoria" => $cat->categoria,
                "tiendas" => CategoriaTienda::where("categoria_id",$cat->id)->count()
            ];
            
        }
        return $arrayCategorias;
    }

    public function tiendasPorCategoria($id){
        $categorias = Categoria::where("categoria_id",$id)->get();
        $arrayCategorias = [];
        foreach( $categorias as $cat ){
            $tiendas = CategoriaTienda::where("categoria_id",$cat->id)
                ->select(
                    "tiendas.id as tienda_id",
                    "tiendas.tienda as tienda",
                    "tiendas.imagen as tienda_imagen"
                )
                ->join("tiendas","tiendas.id","=","categoria_tienda.tienda_id")
                ->get();
            $nuevasTiendas = [];
            foreach( $tiendas as $t ){
                $horario = DB::table("horarios")
                    ->where("tienda_id",$t->tienda_id)
                    ->where("numero",date("N"))
                    ->get();
                //dd($horario);
                $inicio = null;
                $fin = null;
                if( count($horario) > 0 ){
                    $inicio = $horario[0]->inicio;
                    $fin = $horario[0]->fin;
                }

                $total = DB::table("calificaciones")
                    ->where("tienda_id",$t->tienda_id)
                    ->sum("calificacion");
                $cantidad = DB::table("calificaciones")
                    ->where("tienda_id",$t->tienda_id)
                    ->count();
                
                $calificacion = null;
                if( $cantidad > 0 ){
                    $calificacion = $total / $cantidad;
                }
                


                $nuevasTiendas[] = [
                    "tienda_id" => $t->tienda_id,
                    "tienda" => $t->tienda,
                    "tienda_imagen" => $t->tienda_imagen,
                    "inicio" => $inicio,
                    "fin" => $fin,
                    "calificacion" => $calificacion
                ];
            }
            //return $nuevasTiendas;
            $arrayCategorias[] = [
                "categoria_id" => $cat->id,
                "categoria" => $cat->categoria,
                "tiendas" => $nuevasTiendas
            ];
        }
        return $arrayCategorias;
        
    }

    public function loMasHot(){
        //return 
        //$data = Tienda::where("id",20)->get()[0]->productos()->get();
        //$data = Categoria::where("id",1)->get()[0]->productos()->where("destacado",0)->get();
        $data = Destacado::all();//[0]->cartelera()->get()[0]->pancartas()->get();
        $array = [];
        for($x = 0 ; $x < count( $data ) ; $x++){
            if( $data[$x]->cartelera_id != null ){
                $array[] = [
                    "type" => "banner",
                    "data" => $data[$x]->cartelera()->get()[0]->pancartas()->get()
                ];
            }
            if( $data[$x]->categoria_id != null ){
                $array[] = [
                    "tipo" => "categoria",
                    "categoria" => $data[$x]->categoria()->get()[0]->categoria,
                    "data" => $data[$x]->categoria()->get()[0]->productos()->where("destacado",1)->get()//cartelera()->get()[0]->pancartas()->get()
                ];
            }
        }
        return $array;
    }

    public function tienda($id){
        $tienda = DB::table("tiendas")->where("id",$id)->get();
        $productos = DB::table("productos")->where("tienda_id",$id)->get();
        return [
            $tienda,
            $productos
        ];
    }

    public function producto($id){
        $producto = DB::table("productos")->where("id",$id)->get();
        return $producto;
    }

    public function getProducts(){
        //return 
        //$data = Tienda::where("id",20)->get()[0]->productos()->get();
        //$data = Categoria::where("id",1)->get()[0]->productos()->where("destacado",0)->get();
        $data = Destacado::all();//[0]->cartelera()->get()[0]->pancartas()->get();
        $array = [];
        for($x = 0 ; $x < count( $data ) ; $x++){
            if( $data[$x]->cartelera_id != null ){
                $array[] = [
                    "type" => "banner",
                    "data" => $data[$x]->cartelera()->get()[0]->pancartas()->get()
                ];
            }
            if( $data[$x]->categoria_id != null ){
                $array[] = [
                    "tipo" => "categoria",
                    "categoria" => $data[$x]->categoria()->get()[0]->categoria,
                    "data" => $data[$x]->categoria()->get()[0]->productos()->where("destacado",1)->get()//cartelera()->get()[0]->pancartas()->get()
                ];
            }
        }
        return $array;
    }

}
