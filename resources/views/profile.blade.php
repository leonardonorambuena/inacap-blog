@extends('layouts.app')
@section('title', "Perfil $user->full_name")
@section('content')
	<div class="container">
		@include('partials.message')
		<form action="/profile" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $user->id }}">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h1 class="panel-title text-center">
						Actualizar información 
					</h1>
				</div>
				<div class="panel-body">
					@include('partials.form-profile')
				</div>
				<div class="panel-footer text-center">
					<button type="submit" class="btn btn-success">Actualizar</button>
				</div>
			</div>
		</form>
	</div>
@stop