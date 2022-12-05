@extends('layouts.app')
@section('content')

<div class="container">
<a type="button" class="btn btn-dark" href="{{ route('documentos.create', $usuario)}}">Agregar Documento</a>
    <div class="row justify-content-center">
            <table  colspan="2" class="table table-success table-striped-columns">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                        @foreach ($documentos as $documento)
                        <tr class="border-b">
                            <td>{{$documento->Nombre}}</td>
                            <td><a type="button" class="btn btn-dark" href="/documentos/{{$documento->Ruta}}">Ver</a></td>         
                        </tr>
                       @endforeach
                    </tbody>
                </tbody>
              </table>
        </table>
    </div>
</div>



@endsection