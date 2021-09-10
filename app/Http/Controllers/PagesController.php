<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class PagesController extends Controller
{
    public function inicio(){
        $clientes = Cliente::all();
        return view('welcome', compact('clientes'));
    }
    //el function que estaba en el web.php se copia acá para ahorrar lineas de código en esa página

    public function detalles($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.clientedetalles', compact('cliente'));
    }


    public function crear(Request $request){
        //return $request->all();

        $nuevocliente = new Cliente;
        $nuevocliente->nombre = $request->nombre;
        $nuevocliente->apellido = $request->apellido;
        $nuevocliente->correo = $request->correo;
        $nuevocliente->telefono = $request->telefono;
        $nuevocliente->save();

        return back();
    }

    public function modificar(Request $request, $id){
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'correo'=>'required',
            'telefono'=>'required',
        ]);

        $itemRefresh = Cliente::findOrFail($id);
        $itemRefresh->nombre = $request->nombre;
        $itemRefresh->apellido = $request->apellido;
        $itemRefresh->correo = $request->correo;
        $itemRefresh->telefono = $request->telefono;
        $itemRefresh->save();

        return redirect()->route('inicio');
    }

    public function borrar($id){
        //return $request->all();

        Cliente::destroy($id);
        return redirect()->route('inicio');
    }


    public function blog(){
        return view('blog');
    }

    public function cosas(){
        return view('articulos');
    }

    public function mipyme($nombre = null){
        $equipo = ['Pedro', 'Juan', 'Diego'];
        return view('mipyme', compact('equipo', 'nombre'));
    }
}
