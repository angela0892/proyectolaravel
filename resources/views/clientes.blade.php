<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
<a href="#" class="btn btn-primary registrar">Registrar cliente</a>




        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   
                    
                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Telefono</th>
                            <th>Direccion</th>
                            <th>Acciones</th>

                        </tr>
                        @foreach ($listado as $cliente)
                        <tr>
                            <td>{{$cliente->contactFirstName}}</td>
                            <td>{{$cliente->contactLastName}}</td>
                            <td>{{$cliente->phone}}</td>
                            <td>{{$cliente->addressLine1}}</td>
                            <td>
                                <a href="#"class="btn btn-success">Editar</a>
                                <a href="#"class="btn btn-danger">Eliminar</a>

                            </td>
                        </tr>
                        @endforeach

                       
                    </table>


                </div>
            </div>
        </div>
    </div>
  </x-slot>
</x-app-layout>
