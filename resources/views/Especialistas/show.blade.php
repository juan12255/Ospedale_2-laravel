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
    <table class="table table-striped table-success w-75 mx-auto">
        <thead>
            <th>Especialidad</th>
            <th>Nombre</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Fecha poliza</th>
            <th>Correo</th>
            <th>Prorroga</th>
            <th>Telefono</th>
            <th>Estado</th>
        </thead>
        <tr>
            <td>{{$especialistas->Especialidad}}</td>
            <td>{{$especialistas->Nombre}}</td>
            <td>{{$especialistas->Finicio}}</td>
            <td>{{$especialistas->Ffin}}</td>
            <td>{{$especialistas->Fpoliza}}</td>
            <td>{{$especialistas->Correo}}</td>
            <td>{{$especialistas->Prorroga}}</td>
            <td>{{$especialistas->Telefono}}</td>
            <td>{{$especialistas->Estado}}</td>
        </tr>
    </table>
</div>
@endsection