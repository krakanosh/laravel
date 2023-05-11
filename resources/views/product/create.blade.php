@extends('layouts.main')
@section('products')
    <div class="content-wrap">
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name-item" class="form-label">Название</label>
                <input name="name" type="text" class="form-control" id="name-item" placeholder="Введите название товара">
            </div>
            <div class="mb-3">
                <label for="desc-item" class="form-label">Описание</label>
                <textarea name="description" type="password" class="form-control" id="desc-item" placeholder="Введите описание товара"></textarea>
            </div>
            <div class="mb-3">
                <label for="category-item" class="form-label">Категория</label>
                <input name="category_id" type="text" class="form-control" id="category-item" placeholder="Категория товара">
            </div>
            <div class="mb-3">
                <label for="price-item" class="form-label">Цена</label>
                <input name="price" type="text" class="form-control" id="price-item" placeholder="Введите описание товара">
            </div>
            <div class="mb-3">
                <label for="image-item" class="form-label">Изображение</label>
                <input name="image" type="text" class="form-control" id="image-item" placeholder="Добавьте изображение товара">
            </div>
            <div class="mb-3">
                <label for="discount-item" class="form-label">Товар со скидкой?</label>
                <input name="discount" type="text" class="form-control" id="discount-item">
            </div>
            <div class="mb-3">
                <label for="discount-price-item" class="form-label">Цена со скидкой</label>
                <input name="discount_price" type="text" class="form-control" id="discount-price-item">
            </div>
            <button type="submit" class="btn btn-primary">Добавить товар</button>
        </form>
    </div>
@endsection