@extends('layouts.app')

@section('content')
<h1 class="text-center my-3">Detalles</h1>
<hr>
<div class="container card my-2 height:85px">
    <table class="table table-light text-center">
        <tr>
            <th colspan="2">Terceros Administrativos</th>
        </tr>
    </table>
    <table class="table table-striped table-success width:50px">
        <thead>
            <th>Razon social</th>
            <th>Nit</th>
            <th>Representante</th>
            <th>Objeto Contrato</th>
            <th>Inicio de Contrato</th>
            <th>Fin de Contrato</th>
            <th>Prorroga</th>
            <th>Camara</th>
            <th>correo</th>
            <th>telefono</th>
            <th>Supervisor</th>
            <th>Estado</th>
            <th>Documentos</th>
        </thead>
        <tr>
            <td>{{$alianza->Razon_Social}}</td>
            <td>{{$alianza->Nit}}</td>
            <td>{{$alianza->Representante }}</td>
            <td>{{$alianza->Objeto}}</td>
            <td>{{$alianza->FinicioA}}</td>
            <td>{{$alianza->FfinA}}</td>
            <td>{{$alianza->Prorroga}}</td>
            <td>{{$alianza->Camara}}</td>
            <td>{{$alianza->Correo}}</td>
            <td>{{$alianza->Telefono}}</td>
            <td>{{$alianza->Supervisor}}</td>
            <td>{{$alianza->EstadoA}}</td>
            <td>{{$alianza->Documentos}}</td>
        </tr>
    </table>
</div>
@endsection