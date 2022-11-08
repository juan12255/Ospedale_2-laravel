<?php

namespace App\Http\Controllers;

use App\Models\especialista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\New_;

class EspecialistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialistas = especialista::all();
        return view('Especialistas.index', compact('especialistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialista = new especialista();
        return view('Especialistas.create', compact('especialista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especialistas=New Especialista();
        $especialistas->Especialidad=$request->Especialidad;
        $especialistas->Nombre=$request->Nombre;
        $especialistas->Documento=$request->Documento;
        $especialistas->Correo=$request->Correo;
        $especialistas->Telefono=$request->Telefono;
        $especialistas->Estado=$request->Estado;
        $especialistas->save();
        session()->flash("flash.banner","Especialista Actualizado Satisfactoriamente");
        return Redirect::route("Especialistas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function show(Especialista $especialistas)
    {
        return view('Especialistas.show', compact('especialista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialista $especialistas)
    {
        return view('Especialistas.edit', compact('especialista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialista $especialistas)
    {
        $especialistas->Especialidad=$request->Especialidad;
        $especialistas->Nombre=$request->Nombre;
        $especialistas->Documento=$request->Documento;
        $especialistas->Correo=$request->Correo;
        $especialistas->Telefono=$request->Telefono;
        $especialistas->Estado=$request->Estado;
        $especialistas->save();
        session()->flash("flash.banner","Especialista Actualizado Satisfactoriamente");
        return Redirect::route("Especialistas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialistas  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialista $especialistas)
    {
        $especialistas->delete();
        session()->flash("flash.banner", "Especialista Eliminao Satisfactoriamente");
        return Redirect::route("Especialistas.index");
    }
}
