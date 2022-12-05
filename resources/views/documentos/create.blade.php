@extends('layouts.app')
@section('content')

<form action="{{route('documentos.store',$usuario)}}" method="POST" enctype="multipart/form-data">
    @csrf
        <label for="">Nombre</label>
        <input type="text"id="Nombre" name="Nombre" >
        <label class="form-check-label" for="form-control" value="{{ __('Documentos') }}">Documentos</label>
        <input type="file" class="form-control" id="Documentos" name="Documentos" style="width : 250px; heigth : 1px">
        <button type="submit">Agregar Documento</button>
</form>


{{$usuario}}


@endsection