@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <table  colspan="2" class="table table-success table-striped-columns">
                <thead>
                    <tr>
                        <th>Razon Social</th>
                    
                        <th>Nit</th>
            
                        <th>Inicio Contrato</th>
                
                        <th>Fin Contrato</th>
                
                        <th>Supervisor Contrato</th>
                    
                        <th>Estado</th>
                    
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tbody>
                        
                        <div class="justify-content-center">
                                <a href="{{route('alianzas.create')}}">
                                    <button class="btn btn-dark">Crear <i class="bi bi-clipboard2"></i></button>
                                </a>
                                    @include('alianzas.export')
                                    @include('alianzas.import')
                    </div>
                        @foreach ($alianzas as $alianza)
                        <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{$alianza->Razon_Social}}               
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$alianza->Nit}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$alianza->FinicioA}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$alianza->FfinA}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$alianza->Supervisor}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$alianza->EstadoA}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a type="button" class="btn btn-dark" href="{{route('alianzas.show',$alianza)}}">Ver <i class="bi bi-search"></i></a>
                                <a type="button" class="btn btn-dark" href="{{route('alianzas.edit',$alianza)}}">Editar <i class="bi bi-file-medical"></i></a>
                                <form action="{{route('alianzas.destroy', $alianza)}}" method="post" style="display: contents;">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="btn btn-dark">Eliminar <i class="bi bi-x-circle"></i></button>
                                </form>
                                <a type="button" class="btn btn-dark" href="{{route('documentos.index',$alianza->Nit)}}">Documentos <i class="bi bi-file-earmark-pdf"></i></a>
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