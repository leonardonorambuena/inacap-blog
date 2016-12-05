@extends('layouts.app')

@section('content')
	<div class="container">
		@include('partials.message')
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Actualizar al usuario {{ $user->full_name }}</h3>
				</div>
				<div class="panel-body">
					<form action="/admin/users/{{$user->id}}" method="POST">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="PUT">
						<input type="hidden" name="id" value="{{$user->id}}">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
								<label class="control-label" for="role_id"> Asigne Un Rol</label>
								<select class="form-control" name="role_id" id="role_id">
									@foreach($roles as $role)
										<option value="{{$role->id}}" {{ $role->id == $user->role->id ? 'selected': ''}}> {{ $role->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('user_name') ? 'has-error' : ''}}">
								<label class="control-label" for="user_name"> Nombre de Usuario</label>
								<input type="text" name="user_name" class="form-control" value="{{ $user->user_name}}" placeholder="Nombre Usuario">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
								<label class="control-label" for="first_name">Nombres</label>
								<input type="text" name="first_name" id="first_name" class="form-control" value="{{$user->first_name}}" placeholder="Leonardo Arcadio">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('last_name') ? 'has-error': '' }}">
								<label class="control-label" for="last_name">Apellidos</label>
								<input type="text" name="last_name" id="last_name" class="form-control" value="{{$user->last_name}}" placeholder="Norambuena Maureira">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('email') ? ' has-error' : ''}}">
								<label class="control-label" for="email">E-Mail</label>
								<input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" placeholder="lanm18@gmail.com">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('phone') ? ' has-error' : ''}}">
								<label class="control-label" for="phone">Telefono</label>
								<input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}" placeholder="+569 42199379">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('section') ? ' has-error' : ''}}">
								<label class="control-label" for="section">Sección</label>
								<input type="text" name="section" id="section" class="form-control" value="{{$user->section}}" placeholder="221">
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-4 col-md-offset-4">
								<button type="submit" class="btn btn-primary"> Actualizar Usuario</button>
								<a href="/admin/users" class="btn btn-warning">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop