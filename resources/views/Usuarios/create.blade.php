@extends('layouts.app')
@section('content')
<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
        <form class="container" action="{{ route('usuarios.store') }}" method="POST" class="container">
            @csrf
            <div class="mb-3">
                <label for="Documento" class="form-label"  value="{{ __('Documento') }}">Documento</label>
                <input type="number" class="form-control" name="Documento" id="Documento"style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label" value="{{ __('Nombre') }}">Nombre</label>
                <input type="text" class="form-control"  name="Nombre" id="Nombre" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label"  class="form-label" value="{{ __('Apellido') }}">Apellido</label>
                <input type="text" class="form-control"  name="Apellido" id="Apellido"  style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label"  class="form-label" value="{{ __('Cargo') }}">Cargo</label>
                <input type="text" class="form-control"  name="Cargo" id="Cargo" style="width : 250px; heigth : 1px">
            </div>
            <br>
            <button type="submit" class="btn btn-dark">Guardar</button>
        </form>
    </div>
</div>
@endsection