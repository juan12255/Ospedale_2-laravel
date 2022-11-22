@csrf
@extends('layouts.app')
@section('content')
    @csrf
    <div class="block">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                <label for="Especialidad" value="{{ __('Especialidad') }}"> 
                <input id="Especialidad" class="block mt-1 w-full" type="text" name="Especialidad" :value="old('Especialidad', $especialistas->Especialidad)" required disabled />

                <label for="Nombre" value="{{ __('Nombre') }}"> 
                <input id="Nombre" class="block mt-1 w-full" type="text" name="Nombre" :value="old('Nombre', $especialistas->Nombre)" required disabled />

                <label for="Documento" value="{{ __('Documento') }}"> 
                <input id="Documento" class="block mt-1 w-full" type="text" name="Documento" :value="old('Documento', $especialistas->Documento)" required disabled />

                <label for="Correo" value="{{ __('Correo') }}"> 
                <input id="Correo" class="block mt-1 w-full" type="number" name="Correo" :value="old('Correo', $especialistas->Correo)" required disabled />

                <label for="Telefono" value="{{ __('Telefono') }}"> 
                <input id="Telefono" class="block mt-1 w-full" type="text" name="Telefono" :value="old('Telefono', $especialistas->Telefono)" required disabled />

                <label for="Estado" value="{{ __('Estado') }}"> 
                <input id="Estado" class="block mt-1 w-full" type="password" name="Estado" :value="old('Estado', $especialistas->Estado)" required disabled />
                </div>
            </div>
        </div>
    </div>
<button type="submit" class="btn btn-dark">Guardar cambios</button>     
@endsection