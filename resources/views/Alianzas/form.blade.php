@csrf
@extends('layouts.app')
@section('content')
  
    <div class="block">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="block">
                <label for="Razon_Social" value="{{ __('Razon_Social') }}"> 
                <input id="Razon_Social" class="block mt-1 w-full" type="text" name="Razon_Social" :value="old('Razon_Social', $alianza->Razon_Social)" required disabled />

                <label for="Nit" value="{{ __('Nit') }}"> 
                <input id="Nit" class="block mt-1 w-full" type="text" name="Nit" :value="old('Nit', $alianza->Nit)" required disabled />

                <label for="Representante" value="{{ __('Representante') }}"> 
                <input id="Representante" class="block mt-1 w-full" type="text" name="Representante" :value="old('Representante', $alianza->Representante)" required disabled />

                <label for="Objeto" value="{{ __('Objeto') }}"> 
                <input id="Objeto" class="block mt-1 w-full" type="number" name="Objeto" :value="old('Objeto', $alianza->Objeto)" required disabled />

                <label for="FinicioA" value="{{ __('FinicioA') }}"> 
                <input id="FinicioA" class="block mt-1 w-full" type="date" name="FinicioA" :value="old('FinicioA', $alianza->FinicioA)" required disabled />

                <label for="FfinA" value="{{ __('FfinA') }}"> 
                <input id="FfinA" class="block mt-1 w-full" type="date" name="FfinA" :value="old('FfinA', $alianza->FfinA)" required disabled />
                
                <label for="Prorroga" value="{{ __('Prorroga') }}"> 
                <input id="Prorroga" class="block mt-1 w-full" type="date" name="Prorroga" :value="old('Prorroga', $alianza->Prorroga)" required disabled />

                <label for="Camara" value="{{ __('Camara') }}"> 
                <input id="Camara" class="block mt-1 w-full" type="text" name="Camara" :value="old('Camara', $alianza->Camara)" required disabled />

                <label for="Correo" value="{{ __('Correo') }}"> 
                <input id="Correo" class="block mt-1 w-full" type="email" name="Correo" :value="old('Correo', $alianza->Correo)" required disabled />

                <label for="Telefono" value="{{ __('Telefono') }}"> 
                <input id="Telefono" class="block mt-1 w-full" type="date" name="Telefono" :value="old('Telefono', $alianza->Telefono)" required disabled />

                <label for="Supervisor" value="{{ __('Supervisor') }}"> 
                <input id="Supervisor" class="block mt-1 w-full" type="date" name="Supervisor" :value="old('Supervisor', $alianza->Supervisor)" required disabled />

                <label for="EstadoA" value="{{ __('EstadoA') }}"> 
                <input id="EstadoA" class="block mt-1 w-full" type="date" name="EstadoA" :value="old('EstadoA', $alianza->EstadoA)" required disabled />
                </div>
            </div>
        </div>
    </div>
                 <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    <a href="{{ route('Alianzas.index') }}" :active="request()->routeIs('Alianzas.index')">
                        {{ __('Alianzas.index') }}
                    </a>
                </button>           
@endsection