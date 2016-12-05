<div class="row">
	<table class="table table-hover">	
		<thead>	
			<tr>
				<th>Nombre De Usuario</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Rol</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->user_name}}</td>
					<td>{{$user->first_name}}</td>
					<td>{{$user->last_name}}</td>
					<td>{{$user->role->name}}</td>
					<td> 
						<a href="/admin/users/{{$user->id}}/edit" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Actualizar al usuario {{ $user->full_name}}">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						@if($user->isDeleted())
							<a href="#" class="btn btn-success btn-sm btn-restore-user" data-id="{{$user->id}}" data-name="{{$user->full_name}}" data-toggle="modal" data-target="#modal-restore-user">
								<i class="glyphicon glyphicon-ok" data-toggle="tooltip" data-placement="top" title="Restaurar al usuario {{ $user->full_name}}"></i>
							</a>
						@else
							<a href="#" class="btn btn-danger btn-sm btn-delete-user" data-id="{{$user->id}}" data-name="{{$user->full_name}}" data-toggle="modal" data-target="#modal-delete-user">
								<i class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="Eliminar al usuario {{ $user->full_name}}"></i>
							</a>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="row">
	<div class="col-md-6 col-sm-6">
		{{ $users->appends(['user_name' => old('user_name'),
							'first_name' => old('first_name'),
						 	'last_name' => old('last_name'),
						 	'trashed' => old('trashed'), 
						 	'role' => old('role')])->links() }}
	</div> 
	<div class="col-md-6 col-sm-6">
		Total de registros: {{ $users ->total() }}
	</div>
</div>