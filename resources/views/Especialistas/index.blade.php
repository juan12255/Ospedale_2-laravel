@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <table  colspan="2" class="table table-success table-striped-columns">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                    
                        <th>Nombres</th>
            
                        <th>Documento</th>
                
                        <th>Correo</th>
                
                        <th>Telefono</th>
                    
                        <th>Estado</th>
                    
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                        <div class="justify-content-center">
                            <a href="{{route('especialistas.create')}}">
                                <button  class="btn btn-dark">Crear</button>
                                @include('especialistas.export2')
                                @include('especialistas.import2')
                            </a>
                        </div>

                        @foreach ($especialistas as $especialista)
                        <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$especialista->Especialidad}}               
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$especialista->Nombres}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$especialista->Documento}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$especialista->Correo}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$especialista->Telefono}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$especialista->Estado}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a type="button" class="btn btn-dark" href="{{route('especialistas.show',$especialista)}}">Ver</a>
                                <a type="button" class="btn btn-dark" href="{{route('especialistas.edit',$especialista)}}">Editar</a>
                                <form action="{{route('especialistas.destroy', $especialista)}}" method="post" style="display: contents;">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-dark">Eliminar</button>
                                </form>
                                <a type="button" class="btn btn-dark" href="{{route('documentos.index',$especialista->Documento)}}">Documentos</a>
                            </td>  
                        </tr>
                       @endforeach
                       
                    </tbody>
                </tbody>
              </table>
        </table>
    </div>
</div>
@endsection
