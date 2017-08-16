@extends('layouts.master')

@section('content')

    <h2 class="blog-post-title">{{ $user->name }}</h2>
   

@foreach($user->posts as $post)

        <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a></p>


            <p>{{ $post->body }}</p>

        </div><!-- /.blog-post -->

@endforeach



    @if (count($errors->all()) > 0)

        @foreach($errors->all() as $error)
            <div class="form-group">
                <div class="alert alert-danger">
                    <li>{{ $error }}</li>
                </div>
            </div>
        @endforeach

    @endif

@endsection
