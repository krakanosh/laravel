@extends('layouts.main')
    @section('content')
        <div class="content-wrap">
            <a class="add-post" href="{{ route('post.create') }}">Добавить пост</a>
            @foreach ($posts as $post)
                <a class="post-item" href="{{ route('post.show', $post->id) }}">
                    <div class="post-title-wrap">
                        <div>
                            <h2>{{$post->title}}</h2>
                            <p>{{$post->content}}</p>
                            <span>Категория: {{$post->category}}</span>
                        </div>
                        <img src="{{$post->image}}" alt="">
                    </div>
                    <span>Нравится: {{$post->likes}}</span>
                    <span>Опубликованно: {{$post->created_at}}</span>
                </a>
            @endforeach
        </div>
    @endsection