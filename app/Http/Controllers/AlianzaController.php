<?php

namespace App\Http\Controllers;

use App\Exports\AlianzasExport;
use App\Imports\AlianzasImport;
use App\Models\Alianza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

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
    public function excel()
    {
        $alianza = new Alianza();
        return View('alianzas.excel',compact('alianza'));
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
        $alianza->Razon_Social=$request->Razon_Social;
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
        return Redirect::route("alianzas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alianza  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function show(Alianza $alianza)
    {
        return view('alianzas.show', compact('alianza'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alianza  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function edit(Alianza $alianza)
    {
        return view('alianzas.edit', compact('alianza'));
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
        $alianza->Razon_Social=$request->Razon_Social;
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
        return Redirect::route("alianzas.index");
    }

    public function export()
    {
        return Excel::download(new AlianzasExport, 'alianzas.xlsx');
    }

    public function import(Request $request) 
    {
        $file = $request->file('import_file');
        Excel::import(new AlianzasImport,$file->store('temp'));
        return Redirect::route("alianzas.index");
    }
}
