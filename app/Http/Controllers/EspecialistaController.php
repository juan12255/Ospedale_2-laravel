<?php

namespace App\Http\Controllers;

use App\Exports\EspecialistasExport;
use App\Imports\EspecialistasImport;
use App\Models\Especialista;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;
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

        if (User::find(auth()->id())->Cargo == 'Administrador') 
        {
        return view('especialistas.create', compact('especialista'));
        }
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
        $especialista->Nombres=$request->Nombres;
        $especialista->Documento=$request->Documento;
        $especialista->Finicio=$request->Finicio;
        $especialista->Ffin=$request->Ffin;
        $especialista->Fpoliza=$request->Fpoliza;
        $especialista->Correo=$request->Correo;
        $especialista->Telefono=$request->Telefono;
        $especialista->Estado=$request->Estado;
        $especialista->save();
        return Redirect::route("especialistas.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialista  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function show(Especialista $especialista)
    {
        return view('especialistas.show', compact('especialista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialista  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialista $especialista)
    {
        if (User::find(auth()->id())->Cargo == 'Administrador') 
        {
        return view('especialistas.edit', compact('especialista'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especialista  $especialistas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialista $especialista)
    {
        $especialista->Especialidad=$request->Especialidad;
        $especialista->Nombres=$request->Nombres;
        $especialista->Documento=$request->Documento;
        $especialista->Correo=$request->Correo;
        $especialista->Telefono=$request->Telefono;
        $especialista->Estado=$request->Estado;
        $especialista->save();
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
        if (User::find(auth()->id())->Cargo == 'Administrador') 
        {
        return Redirect::route("especialistas.index");
        }
    }

    public function export2()
    {
        if (User::find(auth()->id())->Cargo == 'Administrador') 
        {
        return Excel::download(new EspecialistasExport, 'especialistas.xlsx');
        }
    }

    public function import2(Request $request) 
    {
        $file = $request->file('import_file');
        Excel::import(new EspecialistasImport,$file->store('temp'));
        if (User::find(auth()->id())->Cargo == 'Administrador') 
        {
        return Redirect::route("especialistas.index");
        }
    }
}
