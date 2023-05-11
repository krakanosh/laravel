@extends('layouts.main')
    @section('content')
        <div class="content-wrap">
            <a class="back-to-posts" href="{{ route('post.index') }}">Вернуться назад</a>
                <div class="post-item">
                    <div class="btn-wrap">
                        <a class="edit-post" href="{{ route('post.edit', $post->id) }}">Редактировать пост</a>
                        <form action="{{ route('post.delete', $post->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="delete-post" type="submit">Удалить пост</button>
                        </form>
                    </div>
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
                </div>
                <a class="back-to-posts" href="{{ route('post.index') }}">Вернуться назад</a>
        </div>
    @endsection