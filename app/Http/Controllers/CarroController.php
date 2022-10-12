<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function store(Request $request)
    {
        
        $post = new Carro;
        $post->producto_id = $request->input('producto');
        $post->cantidad = $request->input('cantidad');
        $post->save();

        session()->flash('status', 'Alumno creado con éxito');
        return back();;
       
    }

    public function destroy(Carro $id)
    
    {
        $id->delete();
        return back()->with('status', 'Borrado con éxito');
    }
}

