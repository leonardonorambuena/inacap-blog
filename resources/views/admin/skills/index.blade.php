@extends('layouts.app')
@section('title', 'skills')

@section('content')
	<div class="container">
		@include('admin.skills.partials.list')
		@include('admin.skills.partials.modal-create-skills')
	</div>
@stop

@section('js')
	<script type="text/javascript" src="/js/skill.js"></script>
@stop