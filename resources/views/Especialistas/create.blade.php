@extends('layouts.app')
@section('content')
    <div>

        <div class="" name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Crear Especialista') }}
            </h2>
        <div>
         <div class="py-12">
            <div class="max-w-7xl mx-auto sm:x-6 lg:x-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-7">
                    <form action="{{ route('Especialistas.store') }}" method="post">
                         @include('especialistas.form')
                    </form>
                 </div>
            </div>
        </div>
    </div>
@endsection