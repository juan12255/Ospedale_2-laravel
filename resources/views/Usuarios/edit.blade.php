@extends('layouts.app')
@section('content')

<a href="{{route('usuarios.index')}}">
    <button  class="btn btn-dark"> <i class="bi bi-reply-fill"></i></button>
</a>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form action="{{ route('usuarios.update', $usuario) }}" method="POST">
             @method('PUT') 
             @csrf
             @include('usuarios.form')
            </form>
        </div>
    </div>
</div>
@endsection