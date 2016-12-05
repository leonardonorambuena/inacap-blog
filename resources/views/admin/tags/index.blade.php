@extends('layouts.app')
@section('content')
	<div class="container">
	@include('partials.message')
		@include('admin.tags.partials.search')
    	@include('admin.tags.partials.tagList')
	</div>

	@include('admin.tags.partials.modal-create-tags')
	@include('admin.tags.partials.modal-edit-tags')
	@include('admin.tags.partials.modal-delete-tags')
@stop

@section('js')
	<script type="text/javascript" src="/js/tag.js"></script>
@stop