@extends('layouts.app')
@section('content')

    <div class="container" style="width: 700px; height: 1000px">
        <div class="container card my-2">
                <form action="{{route('documentos.store',$usuario)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="Especialidad" class="form-label"  value="{{ __('Nombre') }}">Nombre</label>
                        <input type="text" class="form-control" id="Nombre" name="Nombre" style="width : 250px; heigth : 1px" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-check-label" for="form-control" value="{{ __('Documentos') }}">Documentos</label>
                        <input type="file" class="form-control" id="Documentos" name="Documentos" style="width : 250px; heigth : 1px" required>
                    </div>
                        <button type="submit" class="btn btn-dark">Agregar Documento</button>
                </form>
        </div>
    </div>
@endsection