@extends('layouts.app')

@section('content')
<h1 class="text-center my-3">Detalles Especialista</h1>
<hr>
<div class="container card my-2">
    <table class="table table-light text-center">
        <tr>
            <th colspan="2">Especialistas</th>
        </tr>
    </table>
    <table class="table table-striped table-success w-85 mx-auto">
        <thead>
            <th>Especialidad</th>
            <th>Nombre</th>
            <th>Fecha inicio de contrato</th>
            <th>Fecha fin de contrato</th>
            <th>Vigencia poliza</th>
            <th>Correo</th> 
            <th>Telefono</th>
            <th>Estado</th>
            <th>Documentos</th>
        </thead>
        <tr>
            <td>{{$especialista->Especialidad}}</td>
            <td>{{$especialista->Nombres}}</td>
            <td>{{$especialista->Finicio}}</td>
            <td>{{$especialista->Ffin}}</td>
            <td>{{$especialista->Fpoliza}}</td>
            <td>{{$especialista->Correo}}</td>
            <td>{{$especialista->Telefono}}</td>
            <td>{{$especialista->Estado}}</td>
            <td>{{$especialista->Documentos}}</td>
        </tr>
    </table>
</div>
@endsection