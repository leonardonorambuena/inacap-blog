<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				Busqueda
			</h3>
			<a href="/admin/users/create" class="btn btn-primary btn-sm pull-right"> Agregar Usuario
			</a>
			<div class="clearfix"></div>
		</div>
		<div class="panel-body">
			<form class="form">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Nombre de Usuario</label>
						<input type="text" name="user_name" id="user_name" value="{{old('user_name')}}" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Nombre</label>
						<input type="text" name="first_name" id="first_name" value="{{old('first_name')}}" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Apellido</label>
						<input type="text" name="last_name" id="last_name" value="{{old('last_name')}}" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Eliminados</label>
						<input type="checkbox" name="trashed" id="trashed" {{old('trashed') != null ? 'checked': ''}} class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Role</label>
						<select  name="role" class="form-control">
							<option value="">Seleccione una opción</option>
							@foreach($roles as $role)
								<option value="{{ $role->id }}" {{ $role->id == old('role') ? 'selected': ''}}>{{ $role->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="submit" name="btn-search" class="btn btn-info">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>