@extends('layouts.app')

@section('content')
	<div class="container">
		@include('admin.posts.partials.search')
		@include('admin.posts.partials.postList')
	</div>
@stop