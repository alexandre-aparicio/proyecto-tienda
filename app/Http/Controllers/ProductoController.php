<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Carro;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::join('categorias', 'categorias.id', '=', 'productos.categoria_id')
        ->get(['productos.*', 'categorias.nombre AS categoria_nombre']); 

        $categorias = Categoria::get();        
        $carro = Carro::join('productos', 'carros.producto_id', '=', 'productos.id')
        ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
        ->get(['productos.*', 'carros.cantidad', 'carros.id AS carro_id', 'categorias.nombre AS cat_nombre']); 


        return view('index', ['categorias' => $categorias, 'categoria_act' => null, 'productos'=>$productos, 'carro'=>$carro]);        
    }

    public function show( Producto $id)
    {
        
        $datos = [];

             
        
        return view('single-product', $datos);
    }

    public function dashArticles()
    {
        
        // Esta es la formula para emplear el paginate con un join
        $productos = Producto::join('categorias', 'productos.categoria_id', '=', 'categorias.id')->select('productos.*' ,'categorias.*')->paginate(5);
               
        


        return view('dashboard.articulos', ['articulos'=>$productos]);        
    }
}
