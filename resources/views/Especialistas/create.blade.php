@extends('layouts.app')
@section('content')
<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
        <form class="container"   action="{{ route('especialistas.store') }}" method="POST" class="container">
            @csrf
            <div class="mb-3">
                <label for="Especialidad" class="form-label"  value="{{ __('Especialidad') }}">Especialidad</label>
                <input type="text" class="form-control" id="Especialidad" name="Especialidad" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label" value="{{ __('Nombres') }}">Nombres</label>
                <input type="text" class="form-control" id="Nombre"  name="Nombres" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Documento') }}">Documento</label>
                <input type="number" class="form-control" id="Documento"  name="Documento"  style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Finicio') }}">Fecha inicio contrato</label>
                <input type="date" class="form-control" id="Telefono"  name="Finicio" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Ffin') }}">Fecha inicio contrato</label>
                <input type="date" class="form-control" id="Telefono"  name="Ffin" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Fpoliza') }}">Fecha poliza</label>
                <input type="date" class="form-control" id="Telefono"  name="Fpoliza" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Correo') }}">Correo</label>
                <input type="email" class="form-control" id="Correo"  name="Correo"  style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Telefono') }}">Telefono</label>
                <input type="number" class="form-control" id="Telefono"  name="Telefono" style="width : 250px; heigth : 1px">
            </div>
            <select class="form-select" aria-label="Default select example"  name="Estado" style="width : 250px; heigth : 1px">
                <option selected>Estado</option>
                <option name="Estado" value="{{ __('Activo') }}">Activo</option>
                <option name="Estado"  value="{{ __('Inactivo') }}">Inactivo</option>
            </select>
            <br>
            <button type="submit" class="btn btn-dark">Guardar</button>
        </form>
    </div>
</div>
@endsection