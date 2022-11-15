@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <h2 class="row justify-content-center">
            {{ __('Ver Especialistas') }}
        </h2>
    <div>
<form action="" class="row justify-content-center">
            <div class="container">
                <label for="Especialidad" class="form-label"> 
                <input type="text" class="form-control" id="Especialidad" name="Especialidad" :value="old('Especialidad', $especialista->Especialidad)" required disabled />

                <label  for="Nombre" class="form-label"> 
                <input type="text" class="form-control" id="Nombre" name="Nombre" :value="old('Nombre', $especialista->Nombre)" required disabled />

                <label  for="Documento" class="form-label"> 
                <input type="number" class="form-control" id="Documento" name="Documento" :value="old('Documento', $especialista->Documento)" required disabled />

                <label  for="Correo" class="form-label"> 
                <input type="email" class="form-control" id="Correo" name="Correo" :value="old('Correo', $especialista->Correo)" required disabled />

                <label  for="Telefono" class="form-label"> 
                <input type="number" class="form-control" id="Telefono" name="Telefono" :value="old('Telefono', $especialista->Telefono)" required disabled />

                <label  for="Estado" class="form-label"> 
                <input type="text" class="form-control" id="Estado" name="Estado" :value="old('Estado', $especialista->Estado)" required disabled />
            </div>
</form>
                
                    <a href="{{ route('home') }}" :active="request()->routeIs('home')">
                        <button class="btn btn-dark">home</button>
                    </a>
                 
@endsection