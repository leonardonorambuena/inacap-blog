@extends('layouts.app')
@section('title','Users')
@section('content')
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre de usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Role</th>
			<th>Fecha de Registro</th>
			<th>Acciones</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{ $user->user_name}}</td>
				<td>{{ $user->first_name }}</td>
				<td>{{ $user->last_name }}</td>
				<td>{{ $user->role->name }}</td>
				<td>{{ $user->created_at }}</td>
				<td>
					<a href="/admin/users/{{$user->id}}/edit">
						
					</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@stop