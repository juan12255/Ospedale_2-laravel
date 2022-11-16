<?php

namespace App\Http\Controllers;

use App\Models\Especialista;
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
        $especialistas = Especialista::all();
        return view('especialistas.index', compact('especialistas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialista = new Especialista();
        return view('especialistas.create', compact('especialista'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especialista=New Especialista();
        $especialista->Especialidad=$request->Especialidad;
        $especialista->Nombre=$request->Nombre;
        $especialista->Documento=$request->Documento;
        $especialista->Correo=$request->Correo;
        $especialista->Telefono=$request->Telefono;
        $especialista->Estado=$request->Estado;
        $especialista->save();
        session()->flash("flash.banner","Especialista Actualizado Satisfactoriamente");
        return Redirect::route("especialistas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialista  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function show(Especialista $especialistas)
    {
        return view('especialistas.show', compact('especialistas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialista  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialista $especialistas)
    {
        return view('especialistas.edit', compact('especialistas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especialista  $especialistas
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
        return Redirect::route("especialistas.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialista  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialista $especialista)
    {
        $especialista->delete();
        session()->flash("flash.banner", "Especialista Eliminao Satisfactoriamente");
        return Redirect::route("especialistas.index");
    }
}
