@extends('layouts.app')
@section('content')

        <div class="container card my-1">
            <form action="{{ route('alianzas.update', $alianza) }}" method="POST">
             @method('PUT') 
             @csrf
             @include('alianzas.form')
            </form>
        </div>
    </div>

@endsection