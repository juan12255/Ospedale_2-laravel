<?php

namespace App\Http\Controllers;

use App\Models\alianza;
use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($usuario)
    {
        $documentos = Documento::where('Usuario','=',$usuario)->get();
        return view('documentos.index', compact('documentos','usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($usuario)
    {
        return view('documentos.create', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $usuario)
    {
        $documento = new Documento();
        $documento->Nombre=$request->Nombre;
        $request->validate([
            'Documentos' => 'mimes:pdf'
        ]);
        $documento->Ruta = $request->Documentos->store('','documentos');
        $documento->usuario=$usuario;
        $documento->save();
        return Redirect::route('documentos.index',compact('usuario'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(Documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documento $documento)
    {
        //
    }
}
