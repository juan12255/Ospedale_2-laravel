@extends('layouts.app')
@section('content')
<div class="container" style="width: 700px; height: 1000px">
    <div class="container card my-2">
        <form action="{{route('alianzas.store')}}" class="container">
            <div class="mb-3">
                <label for="Razon_Social" class="form-label"  value="{{ __('Razon_Social') }}">Razon Social</label>
                <input type="text" class="form-control" id="Razon_Social"style="width : 250px; heigth : 1px">
            <div id="" class="form-text">Digite la razon social</div>
            </div>
            <div class="mb-3">
                <label for="Nit" class="form-label">"{{ __('Nit') }}"</label>
                <input type="number" class="form-control" id="Nit" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1"value="{{ __('Representante') }}">Representante Legal</label>
                <input type="text" class="form-control" id="Representante"  style="width : 250px; heigth : 1px">
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" value="{{ __('Objeto') }}"></textarea>
                <label for="floatingTextarea" style="width : 250px; heigth : 1px">objeto del contrato</label>
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('FinicioA') }}">Fecha Inicio Contrato</label>
                <input type="date" class="form-control" id="FinicioA" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('FfinA') }}">Fecha Fin Contrato</label>
                <input type="date" class="form-control" id="FfinA" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Prorroga') }}">Prorroga Automatica</label>
                <input type="text" class="form-control" id="Prorroga" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Camara') }}">Vigencia Camara de Comercio</label>
                <input type="text" class="form-control"id="Camara" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Correo') }}">Correo Electronico</label>
                <input type="email" class="form-control" id="Correo" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-label" for="exampleCheck1" value="{{ __('Telefono') }}">Telefono</label>
                <input type="number" class="form-control" id="Telefono" style="width : 250px; heigth : 1px">
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="exampleCheck1" value="{{ __('Supervisor') }}">Supervisor del Contrato</label>
                <input type="text" class="form-control" id="Supervisor" style="width : 250px; heigth : 1px">
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