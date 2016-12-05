<div class="col-md-7">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">
				Datos de contacto
			</h3>
		</div>
		<div class="panel-body">
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
				<div class="form-group {{ $errors->has('description') ? ' has-error' : ''}}">
					<label class="control-label" for="section">Descripción</label>
					<textarea name="description" id="description" class="form-control" value="{{$user->description}}" placeholder="221"></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<label class="control-label" for="section">Habilidades</label>
					<select class="form-control" multiple name="skills[]" id="skills">
						@foreach($skills as $skill)
							<option value="{{ $skill->id }}" {{$user->skills->contains('id',$skill->id) ? 'selected' : '' }}> {{$skill->name}} </option>
						@endforeach
					</select>
				</div>
			</div>	
		</div>
	</div>
</div>
<div class="col-md-4 col-md-offset-1">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">
				Redes Sociales
			</h3>
		</div>
			<div class="panel-body">
				<div class="form-group">
					<label class="control-label" for="avatar">
						Avatar
					</label>
					<input type="file" name="avatar" id="avatar" class="form-control" value="{{ $user->avatar }}">
				</div>
				<div class="">
					<img src="{{ $user->avatar_path }}" class="img img-responsive">
				</div>
				<div class="form-group">
					<label class="control-label" for="facebook_url">
						Facebook
					</label>
					<input type="text" name="facebook_url" id="facebook_url" class="form-control" value="{{ $user->facebook_url }}">
				</div>
				<div class="form-group">
					<label class="control-label" for="twiter_url">
						Twitter
					</label>
					<input type="text" name="twiter_url" id="twiter_url" class="form-control" value="{{ $user->twiter_url }}">
				</div>
				<div class="form-group">
					<label class="control-label" for="linkedin_url">
						Linkedin
					</label>
					<input type="text" name="linkedin_url" id="linkedin_url" class="form-control" value="{{ $user->linkedin_url }}">
				</div>
			</div>
		</div>
	</div>
