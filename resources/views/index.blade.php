@extends('layouts.app')
    @section('content')
        <h1>俺のダイエット</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
@endsection