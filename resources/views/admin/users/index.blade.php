@extends('layouts.app')
@section('title','Users')
@section('content')
<table class="table">
	<thead>
		<tr>
			<th>Nombre de usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Role</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{ $user->user_name}}</td>
				<td>{{ $user->first_name }}</td>
				<td>{{ $user->last_name }}</td>
				<td>{{ $user->role->name }}</td>
			</tr>
		@endforeach
	</tbody>
</table>
{{ $users->links() }}
@stop