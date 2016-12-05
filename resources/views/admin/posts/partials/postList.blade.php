<div class="row">
	<table class="table table-hover table-stripped">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Portada</th>
				<th>Creador</th>
				<th>Fecha Creación</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
				<tr>
					<td>{{ $post->title }}</td>
					<td><img src="{{$post->image_path}}" width="50" height="40"/></td>
					<td><a href="/admin/users/{{ $post->editor->id }}/edit"> {{ $post->editor->full_name }}</a></td>
					<td>{{ $post->created_at }}</td>
					<td>
						<a href="/admin/posts/{{$post->id}}"> ver </a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>			
</div>