@extends("layouts.admin")

@section("title","Usuarios")

@include("libs.datatables")
@section("content")
@include("admin.modals.crear_usuario")
<div class="card">
    <div class="card-body">
    	<table class="table" id="tabla-usuarios">
    		<thead>
    			<tr>
    				<th>Nombre</th>
    				<th>Apellido</th>
    				<th>Correo Electrónico</th>
            <th>Tipo de Perfil</th>
    				<th>Detalles</th>
    			</tr>
    		</thead>
    		<tbody></tbody>
    	</table>
    </div>
    <div class="card-footer text-right">
      <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modalCrearUsuario">
        <i class="fa fa-plus"></i>
        Registrar Usuario
      </a>
    </div>
  </div>
@endsection

@push("scripts")
<script>
	$('#tabla-usuarios').DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
    processing: false,
    serverSide: true,
    ajax: '{{ route('datatables.usuarios','bibliotecario') }}',
    columns: [
        { data: 'name', name: 'name' },
        { data: 'surname', name: 'surname' },
        { data: 'email', name: 'email' },
        { data: 'rol', name: 'rol' },
        { data: 'details', name: 'details',orderable: false,searchable: false }
    ]
	});
</script>
@endpush
