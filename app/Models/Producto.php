<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public static function getProducto()
    {
        return Producto::select('productos.*', 'categorias.id as cat_nombre')
            ->leftJoin('categorias', 'productos.categoria_id', '=', 'categorias.id')            
            ->get();
    }

}
