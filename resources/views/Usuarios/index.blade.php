@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
            <table  colspan="2" class="table table-success table-striped-columns">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>

                        <th>Apellidos</th>

                        <th>Documento</th>

                        <th>Email</th>
                
                        <th>Cargo</th>
                    
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>

                        <a href="{{route('usuarios.create')}}">
                            <button  class="btn btn-dark">Crear <i class="bi bi-file-earmark-person"></i></button>
                        </a>

                        @foreach ($usuarios as $usuario)
                        <tr class="border-b">
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$usuario->name}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$usuario->Apellido}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$usuario->Documento}}               
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$usuario->email}}               
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$usuario->Cargo}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a type="button" class="btn btn-dark" href="{{route('usuarios.show',$usuario)}}">Ver <i class="bi bi-search"></i></a>
                                <a type="button" class="btn btn-dark" href="{{route('usuarios.edit',$usuario)}}">Editar <i class="bi bi-file-medical"></i></a>
                                <form action="{{route('usuarios.destroy', $usuario)}}" method="post" style="display: contents;">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-dark">Eliminar <i class="bi bi-x-circle"></i></i></button>
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
