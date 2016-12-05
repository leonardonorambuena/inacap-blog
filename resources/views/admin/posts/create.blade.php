@extends('layouts.app')

@section('content')
	<div class="container">
		@include('partials.message')
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Agregar una entrada</h3>
				</div>
				<div class="panel-body">
					<form action="/admin/posts" method="POST" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
								<label class="control-label" for="title"> Titulo</label>
								<input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Mejoras en PHP 7">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{$errors->has('image') ? 'has-error' : ''}}">
								<label class="control-label" for="image">Imagen de portada</label>
								<input type="file" name="image" id="image" class="form-control" value="{{old('image')}}">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="tags">Etiquetas</label>
								<select name="tags[]" multiple class="form-control">
									@foreach($tags as $tag)
										<option value="{{$tag->id}}">{{ $tag->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group {{ $errors->has('body') ? 'has-error': '' }}">
								<label class="control-label" for="body">Cuerpo del Articulo</label>
								<textarea name="body" id="body"  class="form-control my-editor">
									{{old('body')}}
								</textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="col-md-4 col-md-offset-2">
								<a href="/admin/posts" class="btn btn-warning"> Cancelar</a>
								<button type="submit" class="btn btn-primary">Crear</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop

@section('js')
	<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="/js/post.js"></script>
@stop