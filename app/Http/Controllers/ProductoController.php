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

        $productos = Producto::get();

        $breadcrumb = []; 
        

        return view('index', ['breadcrumb' => $breadcrumb,  'productos'=>$productos]);        
    }

    public function show( Producto $id)
    {
        
        

             $datos = Producto::where('id', $id->id)->get();
            $breadcrumb = []; 
             

             $cat_padrotes = DB::table('cat_padrotes')->where('id', $id->catpadrote_id)->get();
             
             $cat_padrote = $cat_padrotes[0]->nombre;
             
             $cat_padres = DB::table('cat_padres')->where('id', $cat_padrotes[0]->categoriapadre_id)->get();
             $cat_padre = $cat_padres[0]->nombre;
             $categorias = DB::table('categorias')->where('id', $cat_padres[0]->categoria_id)->get();
             $categoria = $categorias[0]->nombre;
             
             
             
             array_push($breadcrumb, $categoria);
            array_push($breadcrumb, $cat_padre);
            array_push($breadcrumb, $cat_padrote);
             $imagenes = DB::table('imagen_productos')->where('producto_id', $id->id)->get();

             

        
        return view('single-product', ['datos'=>$datos, 'imagenes'=>$imagenes, 'breadcrumb'=>$breadcrumb]);
    }

    public function dashArticles()
    {
       if (Auth::user()->rol !== 1 ) {
                
               return Redirect('/');
            }

        
        // Esta es la formula para emplear el paginate con un join
        $productos = Producto::select()->paginate(2, '[*]', 'products');

        $usuarios = User::get();
        $compras = Compra::join('users', 'compras.usuario_id', '=', 'users.id')->select('compras.*' ,'users.name AS usr_nombre')->paginate(5, '[*]', 'compras');
        $menus = DashMenu::get();
        $submenus = DB::table('dash_submenus')->get();
               
        


        return view('dashboard.main-dash', ['articulos'=>$productos, 'usuarios'=>$usuarios, 'compras'=>$compras, 'menus'=>$menus, 'submenus'=>$submenus]);        
    }
}
