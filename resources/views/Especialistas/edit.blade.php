@extends('layouts.app')
@section('content')
<div class="" name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Editar Producto') }}
    </h2>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('especialistas.update', $especialistas) }}" method="POST">

             @method('PUT') 
             @include('especialistas.form')

            </form>
           
        </div>
    </div>
</div>
@endsection