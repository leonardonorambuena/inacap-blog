<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				Busqueda Posts
			</h3>
			<a href="/admin/posts/create" class="btn btn-primary btn-sm pull-right"> Agregar Post
			</a>
			<div class="clearfix"></div>
		</div>
		<div class="panel-body">
			<form class="form-inline">
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Titulo</label>
						<input type="text" name="title" id="title-search" value="{{old('title')}}" class="form-control">
					</div>
				</div>
				
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Eliminados</label>
						<input type="checkbox" name="trashed" id="trashed" {{old('trashed') != null ? 'checked': ''}} class="form-control">
					</div>
				</div>
				<input type="submit" name="btn-send" class="btn btn-info" value="Buscar">
			</form>
		</div>
	</div>
</div>