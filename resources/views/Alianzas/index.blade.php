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
                                <a href="{{route('alianzas.show',$alianza)}}">
                                    <button>Ver</button>
                                </a>
                                <a href="{{route('alianzas.edit',$alianza)}}">
                                    <button>Editar</button>
                                </a>
                                <form action="{{route('alianzas.destroy', $alianza)}}" method="post" style="display: contents;">
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