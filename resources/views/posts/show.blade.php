@extends('layouts.app')
@section('title', $post->title)
@section('content')
	<div class="container">
		@include('partials.message')
		<div class="col-md-8 col-md-offset-2">
			<div class="title-post">
				<h1>{{ $post->title }}
					@foreach($post->tags as $tag)
						<label class="label label-info">{{$tag->name}}</label>
					@endforeach
					</h1>
				<img src="{{ $post->image_path }}" class="img img-responsive">
			</div>	
			<div class="head-post-autor col-md-12">
				<div class="pull-left">
					{{$post->created_at}}
				</div>
				<div class="pull-right">
					<span  class="badge">
						{{$post->rating}} Visitas
					</span> 
					<span class="badge badge-info">
						{{$post->comment_text}}
					</span>
				</div>
			</div>
			<br>
			<hr class="hr-post">
			<div class="col-md-12">
				{!! $post->body !!}
			</div>
			<div class="col-md-12">
				<div class="media">
		            <a class="pull-left" href="#">
		                <img class="media-object dp img-circle" src="{{ $post->editor->avatar_path }}" style="width: 100px;height:100px;">
		            </a>
		            <div class="media-body">
		                <h4 class="media-heading"> {{$post->editor->full_name }} </h4>
		                <h5>{{ $post->editor->description }}</h5>
		                <hr style="margin:8px auto">
						@foreach($post->editor->skills as $skill)
		                	<span class="label label-default">{{ $skill->name }}</span>
		                @endforeach
		            </div>
		        </div>
			</div>
			@if($post->comments->count() > 0)
			<div class="col-md-12">
				
			</div>	
			@endif
			@if(Auth::check())
				<div class="col-md-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title">Dejanos tus comentarios</h3>
						</div>
						<div class="panel-body">
							<form>
								<textarea class="form-control"></textarea>
							</form>
						</div>
						<div class="panel-footer text-center">
							<input type="submit" value="enviar" class="btn btn-info">
						</div>
					</div>
				</div>
			@endif

		</div>
		
	</div>
@stop