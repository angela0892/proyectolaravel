<x-app-layout>
	<x-slot name="header">
		<div class="d-flex justify-content-between align-items-center">
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				{{ __('Empleados') }}
			</h2>
    	<a href="#" class="btn btn-primary registrar">Registrar Empleados</a>
		</div>
	</x-slot>
	
	<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <table class="table">
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Puesto</th>
							<th>Correo</th>
						</tr>
						
						@foreach ( $listado as $empleado )
						<tr>
							<td>{{ $empleado -> firstName }}</td>
							<td>{{ $empleado -> lastName }}</td>
							<td>{{ $empleado -> jobTitle }}</td>
							<td>{{ $empleado -> email }}</td>
							<td>
								<a href="#" class="btn btn-success">Editar</a>
								<a href="#" class="btn btn-danger">Eliminar</a>
							</td>
						</tr>
						@endforeach

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  

                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Rol</th>
                            <th>Email</th>
                            
                            

                        </tr>
                        @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->firstName}}</td>
                            <td>{{$empleado->lastName}}</td>
                            <td>{{$empleado->jobTitle}}</td>
                            <td>valera@coco.com</td>
                            <td>
                                <a href="#"class="btn btn-success">Editar</a>
                                <a href="#"class="btn btn-danger">Eliminar</a>

                             </td>

                        </tr>
                        @endforeach

                        <
                    </table>


                </div>
            </div>
        </div>
    </div>
  </div>
</x-app-layout>
