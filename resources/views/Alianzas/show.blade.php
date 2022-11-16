@extends('layouts.app')

@section('content')
<h1 class="text-center my-3">Detalles</h1>
<hr>
<div class="container card my-2 height:85px     ">
    <table class="table table-light text-center">
        <tr>
            <th colspan="2">Terceros Administrativos</th>
        </tr>
    </table>
    <table class="table table-striped table-success width:85px  mx-auto">
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
        </thead>
        <tr>
            <td>{{$alianzas->Razon_Social}}</td>
            <td>{{$alianzas->Nit}}</td>
            <td>{{$alianzas->Representante }}</td>
            <td>{{$alianzas->Objeto}}</td>
            <td>{{$alianzas->FinicioA}}</td>
            <td>{{$alianzas->FfinA}}</td>
            <td>{{$alianzas->Prorroga}}</td>
            <td>{{$alianzas->Camara}}</td>
            <td>{{$alianzas->Correo}}</td>
            <td>{{$alianzas->Telefono}}</td>
            <td>{{$alianzas->Supervisor}}</td>
            <td>{{$alianzas->EstadoA}}</td>
        </tr>
    </table>
</div>
@endsection