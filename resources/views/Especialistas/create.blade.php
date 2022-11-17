@extends('layouts.app')
@section('content')
<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
        <form class="container"  action="{{ route('especialistas.store') }}" class="container">
            <div class="mb-3">
                <label for="Especialidad" class="form-label"  value="{{ __('Especialidad') }}">Especialidad</label>
                <input type="text" class="form-control" id="Especialidad"style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label" value="{{ __('Nombre') }}">Nombre</label>
                <input type="text" class="form-control" id="Nombre" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Documento') }}">Documento</label>
                <input type="number" class="form-control" id="Documento"  style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Finicio') }}">Fecha inicio contrato</label>
                <input type="date" class="form-control" id="Telefono" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Ffin') }}">Fecha inicio contrato</label>
                <input type="date" class="form-control" id="Telefono" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Fpoliza') }}">Fecha inicio contrato</label>
                <input type="date" class="form-control" id="Telefono" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Correo') }}">Correo</label>
                <input type="text" class="form-control" id="Correo"  style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Telefono') }}">Telefono</label>
                <input type="number" class="form-control" id="Telefono" style="width : 250px; heigth : 1px">
            </div>
            <select class="form-select" aria-label="Default select example" style="width : 250px; heigth : 1px">
                <option selected>Estado</option>
                <option  value="{{ __('Supervisor') }}">Activo</option>
                <option  value="{{ __('Supervisor') }}">Inactivo</option>
            </select>
            <br>
            <button type="submit" class="btn btn-dark">Guardar</button>
        </form>
    </div>
</div>
@endsection