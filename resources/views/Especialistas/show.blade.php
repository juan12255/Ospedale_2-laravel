@extends('layouts.app')
@section('content')
    <div class="" name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ver Especialista') }}
        </h2>
    <div>

    <div class="py-12">
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
                 <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        {{ __('home') }}
                    </x-jet-nav-link>
                </button>
@endsection
