@extends('layouts.main')
@section('content')
    <div class="content-wrap">
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Заголовок</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Заголовок">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Контент</label>
                <textarea name="content" class="form-control" id="content" placeholder="Контент"></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Изображение</label>
                <input name="image" type="text" class="form-control" id="image" placeholder="Изображение">
            </div>
            <input type="submit" class="btn btn-primary" value="Опубликовать пост">
        </form>
    </div>
@endsection