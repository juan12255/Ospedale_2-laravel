@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <table  colspan="2" class="table table-success table-striped-columns">
                <thead>
                    <tr>
                        <th>Especialidad</th>
                    
                        <th>Nombre</th>
            
                        <th>Documento</th>
                
                        <th>Correo</th>
                
                        <th>Telefono</th>
                    
                        <th>Estado</th>
                    
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
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
                                {{$especialista->correo}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$especialista->Telefono}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$especialista->Estado}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a href="{{route('Especialistas.show',$especialista)}}">
                                    <button>Ver</button>
                                </a>
                                <a href="{{route('Especialistas.edit',$especialista)}}">
                                    <button>Editar</button>
                                </a>
                                <form action="{{route('Especialistas.destroy', $especialista)}}" method="post" style="display: contents;">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit">Eliminar</button>
                                </form>
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
