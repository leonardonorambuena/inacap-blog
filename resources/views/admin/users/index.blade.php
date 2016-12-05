@extends('layouts.app')
@section('content')
	<div class="container">
	@include('partials.message')
		@include('admin.users.partials.search')
    	@include('admin.users.partials.usersList')
	</div>

	@include('admin.users.partials.modal-delete-user')
	@include('admin.users.partials.modal-restore-user')
	
@stop

@section('js')
	<script type="text/javascript" src="/js/user.js"></script>
@stop