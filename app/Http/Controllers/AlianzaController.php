<?php

namespace App\Http\Controllers;

use App\Models\Alianzas;
use Illuminate\Http\Request;

class AlianzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Alianzas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alianzas  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function show(Alianzas $alianzas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alianzas  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function edit(Alianzas $alianzas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alianzas  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alianzas $alianzas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alianzas  $alianzas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alianzas $alianzas)
    {
        //
    }
}
