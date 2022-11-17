<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = new Usuario();
        return view('usuarios.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->Documento=$request->Documento;
        $usuario->Nombre=$request->Nombre;
        $usuario->Apellido=$request->Apellido;
        $usuario->Correo=$request->Correo;
        $usuario->Cargo=$request->Cargo;
        $usuario->save();
        return Redirect::route("usuarios.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuarios)
    {
        return view('usuarios.show', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuarios)
    {
        return view('usuarios.edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuarios)
    {
        $usuarios->Documento=$request->Documento;
        $usuarios->Nombre=$request->Nombre;
        $usuarios->Apellido=$request->Apellido;
        $usuarios->Correo=$request->Correo;
        $usuarios->Cargo=$request->Cargo;
        $usuarios->save();
        return Redirect::route("usuarios.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return Redirect::route("usuarios.index");
    }
}
