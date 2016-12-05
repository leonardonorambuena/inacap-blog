@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
    @foreach($posts as $post)
            <a href="/post/{{$post->slug}}">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading title-post-index">{{ $post->title }}</div>
                        <div>
                            <img src="{{$post->image_path}}" class="img-post-index">
                        </div>
                        <div class="panel-footer">
                            {{ $post->created_at->diffForHumans() }}
                            <div class="pull-right">
                                 {{ $post->editor->full_name }} 
                            </div>
                        </div>
                    </div>
                </div>
            </a>

    @endforeach
</div>
@endsection
