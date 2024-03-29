@extends('layouts.app')
@section('content')

<a href="{{route('especialistas.index')}}">
    <button  class="btn btn-dark"> <i class="bi bi-reply-fill"></i></button>
</a>

<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
        <form class=" " style="margin: auto; width: 210px;" action="{{ route('especialistas.store') }}" method="POST" class="container">
            @csrf
            <div class="mb-3">
                <label for="Especialidad" class="form-label"  value="{{ __('Especialidad') }}">Especialidad</label>
                <input type="text" class="form-control" id="Especialidad" name="Especialidad" style="width : 250px; heigth : 1px" required>
            </div>
            <div class="mb-3">
                <label for="Nombre" class="form-label" value="{{ __('Nombres') }}">Nombres y Apellidos</label>
                <input type="text" class="form-control" id="Nombre"  name="Nombres" style="width : 250px; heigth : 1px" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Documento') }}">Documento</label>
                <input type="number" class="form-control" id="Documento"  name="Documento"  style="width : 250px; heigth : 1px" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Finicio') }}">Fecha inicio contrato</label>
                <input type="date" class="form-control" id="Finicio"  name="Finicio" style="width : 250px; heigth : 1px" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Ffin') }}">Fecha fin contrato</label>
                <input type="date" class="form-control" id="Ffin"  name="Ffin" style="width : 250px; heigth : 1px" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Fpoliza') }}">Vigencia poliza</label>
                <input type="date" class="form-control" id="Fpoliza"  name="Fpoliza" style="width : 250px; heigth : 1px" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Correo') }}">Correo</label>
                <input type="email" class="form-control" id="Correo"  name="Correo"  style="width : 250px; heigth : 1px" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="form-control" value="{{ __('Telefono') }}">Telefono</label>
                <input type="number" class="form-control" id="Telefono"  name="Telefono" style="width : 250px; heigth : 1px" required>
            </div>
            <select class="form-select" aria-label="Default select example"  name="Estado" style="width : 250px; heigth : 1px" required>
                <option selected>Estado</option>
                <option name="Estado" value="{{ __('Activo') }}">Activo</option>
                <option name="Estado"  value="{{ __('Inactivo') }}">Inactivo</option>
            </select>
             <!-- <div class="mb-3">
                <label class="form-check-label" for="form-control" value="{{ __('Documentos') }}">Documentos</label>
                <input type="file" class="form-control" id="Documentos" name="Documentos" style="width : 250px; heigth : 1px">
            </div>  -->
            <br>
            <button type="submit" class="btn btn-dark">Guardar</button>
        </form>
    </div>
</div>
@endsection