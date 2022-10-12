<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Carro;

class CategoriaController extends Controller
{
     
     public function show($id)
    {
        $categoria = Categoria::find($id);
        $categorias = Categoria::get();
        $productos = Producto::where('categoria_id', '=', $id)->get();
        $carro = Carro::join('productos', 'carros.producto_id', '=', 'productos.id')
        ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
        ->get(['productos.*', 'carros.cantidad', 'carros.id AS carro_id', 'categorias.nombre AS cat_nombre']); 

        return view('categoria', ['categorias' => $categorias, 'categoria_act' => $categoria, 'productos'=>$productos, 'carro'=>$carro]);
    }
}



?>



