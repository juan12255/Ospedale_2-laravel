<?php

namespace App\Http\Controllers;

use App\Models\Alianza;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AlianzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alianzas = Alianza::all();
        return view('alianzas.index',compact('alianzas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alianza = new Alianza();
        return View('alianzas.create',compact('alianza'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alianza = new Alianza();
        $alianza->Razon_social=$request->Razon_social;
        $alianza->Nit=$request->Nit;
        $alianza->Representante=$request->Representante;
        $alianza->Objeto=$request->Objeto;
        $alianza->FinicioA=$request->FinicioA;
        $alianza->FfinA=$request->FfinA;
        $alianza->Prorroga=$request->Prorroga;
        $alianza->Camara=$request->Camara;
        $alianza->Correo=$request->Correo;
        $alianza->Telefono=$request->Telefono;
        $alianza->Supervisor=$request->Supervisor;
        $alianza->EstadoA=$request->EstadoA;
        $alianza->save();
        session()->flash("flash.banner","Alianza creada Satisfactoriamente");
        return Redirect::route("alianzas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alianza  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function show(Alianza $alianzas)
    {
        return view('alianzas.show', compact('alianzas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alianza  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function edit(Alianza $alianzas)
    {
        return view('alianzas.edit',compact('alianzas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alianza  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alianza $alianza)
    {
        $alianza->Razon_social=$request->Razon_social;
        $alianza->Nit=$request->Nit;
        $alianza->Representante=$request->Representante;
        $alianza->Objeto=$request->Objeto;
        $alianza->FinicioA=$request->FinicioA;
        $alianza->FfinA=$request->FfinA;
        $alianza->Prorroga=$request->Prorroga;
        $alianza->Camara=$request->Camara;
        $alianza->Correo=$request->Correo;
        $alianza->Telefono=$request->Telefono;
        $alianza->Supervisor=$request->Supervisor;
        $alianza->EstadoA=$request->EstadoA;
        $alianza->save();
        session()->flash("flash.banner","Alianza actualizada Satisfactoriamente");
        return Redirect::route("alianzas.index");
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alianza  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alianza $alianza)
    {
        $alianza->delete();
        session()->flash("flash.banner","Alianza eliminada Satisfactoriamente");
        return Redirect::route("alianzas.index");
    }
}
