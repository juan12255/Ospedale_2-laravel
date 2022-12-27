@extends('layouts.app')
@section('content')

<a href="{{route('alianzas.index')}}">
    <button  class="btn btn-dark"> <i class="bi bi-reply-fill"></i></button>
</a>

        <div class="container card my-1">
            <form action="{{ route('alianzas.update', $alianza) }}" method="POST">
             @method('PUT') 
             @csrf
             @include('alianzas.form')
            </form>
        </div>
    </div>

@endsection