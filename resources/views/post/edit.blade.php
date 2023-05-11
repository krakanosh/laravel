@extends('layouts.main')
@section('content')
    <div class="content-wrap">
        <form action="{{ route('post.update', $post->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Контент</label>
                <textarea name="content" class="form-control" id="content" placeholder="content">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Картинка</label>
                <input name="image" type="text" class="form-control" id="image" placeholder="image" value="{{$post->image}}">
            </div>
            <button type="submit" class="btn btn-primary">Изменить</button>
        </form>
    </div>
@endsection