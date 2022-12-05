@extends('layouts.app')

@section('content')
<h1 class="text-center my-3">Detalles usuarios</h1>
<hr>
<div class="container card my-2">
    <table class="table table-light text-center">
        <tr>
            <th colspan="2">Usuarios</th>
        </tr>
    </table>
    <table class="table table-striped table-success w-75 mx-auto">
        <thead>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cargo</th>
        </thead>
        <tr>
            <td>{{$usuario->Documento}}</td>
            <td>{{$usuario->Nombre}}</td>
            <td>{{$usuario->Apellido}}</td>
            <td>{{$usuario->Cargo}}</td>
        </tr>
    </table>
</div>
@endsection