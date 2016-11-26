<table class="table">
	<thead>
		<tr>
			<th>Nombre de usuario</th>
			<th>Nombre</th>
			<th>Apellido</th>
		</tr>
	</thead>
	<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{ $user->user_name}}</td>
				<td>{{ $user->first_name }}</td>
				<td>{{ $user->last_name }}</td>
			</tr>
		@endforeach
	</tbody>
</table>