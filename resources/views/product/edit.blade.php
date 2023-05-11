@extends('layouts.main')
@section('products')
    <div class="content-wrap">
        <form action="{{ route('product.update', $product->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name-item" class="form-label">Название</label>
                <input name="name" type="text" class="form-control" id="name-item" value="{{$product->name}}">
            </div>
            <div class="mb-3">
                <label for="desc-item" class="form-label">Описание</label>
                <textarea name="description" type="password" class="form-control" id="desc-item">{{$product->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="category-item" class="form-label">Категория</label>
                <input name="category_id" type="text" class="form-control" id="category-item" value="{{$product->category_id}}">
            </div>
            <div class="mb-3">
                <label for="price-item" class="form-label">Цена</label>
                <input name="price" type="text" class="form-control" id="price-item" value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label for="image-item" class="form-label">Изображение</label>
                <input name="image" type="text" class="form-control" id="image-item" value="{{$product->image}}">
            </div>
            <div class="mb-3">
                <label for="discount-item" class="form-label">Товар со скидкой?</label>
                <input name="discount" type="text" class="form-control" id="discount-item" value="{{$product->discount}}">
            </div>
            <div class="mb-3">
                <label for="discount-price-item" class="form-label">Цена со скидкой</label>
                <input name="discount_price" type="text" class="form-control" id="discount-price-item" value="{{$product->discount_price}}">
            </div>
            <button type="submit" class="btn btn-primary">Изменить товар</button>
        </form>
    </div>
@endsection