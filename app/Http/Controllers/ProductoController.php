<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Carro;
use App\Models\User;
use App\Models\Compra;
use App\Models\DashMenu;

use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    public function index()
    {

        $productos = Producto::join('categorias', 'categorias.id', '=', 'productos.categoria_id')
        ->get(['productos.*', 'categorias.nombre AS categoria_nombre']); 

        $categorias = Categoria::get(); 
        /*       
        $carro = Carro::join('productos', 'carros.producto_id', '=', 'productos.id')
        ->join('categorias', 'productos.categoria_id', '=', 'categorias.id')
        ->get(['productos.*', 'carros.id AS carro_id', 'categorias.nombre AS cat_nombre']); 
        */

        return view('index', ['categorias' => $categorias, 'categoria_act' => null, 'productos'=>$productos]);        
    }

    public function show( Producto $id)
    {
        
        $datos = [];

             
        
        return view('single-product', $datos);
    }

    public function dashArticles()
    {
       if (Auth::user()->rol !== 1 ) {
                
               return Redirect('/');
            }

        
        // Esta es la formula para emplear el paginate con un join
        $productos = Producto::join('categorias', 'productos.categoria_id', '=', 'categorias.id')->select('productos.*' ,'categorias.nombre AS cat_nombre')->paginate(2, '[*]', 'products');

        $usuarios = User::get();
        $compras = Compra::join('users', 'compras.usuario_id', '=', 'users.id')->select('compras.*' ,'users.name AS usr_nombre')->paginate(5, '[*]', 'compras');
        $menus = DashMenu::get();
        $submenus = DB::table('dash_submenus')->get();
               
        


        return view('dashboard.main-dash', ['articulos'=>$productos, 'usuarios'=>$usuarios, 'compras'=>$compras, 'menus'=>$menus, 'submenus'=>$submenus]);        
    }
}
