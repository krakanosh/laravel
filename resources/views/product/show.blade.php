@extends('layouts.main')
@section('products')
    <div class="content-wrap">
        <div class="btn-wrap">
            <a class="btn btn-secondary" href="{{ route('product.index') }}">Вернуться назад</a>
            <a class="btn btn-success" href="{{route('product.edit', $product->id)}}">Редактировать товар</a>
            <form class="form-delete-product" action="{{ route('product.destroy', $product->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Удалить товар</button>
            </form>
        </div>
            <div class="card-item">
                <img src="{{$product->image}}" alt="">
                <div class="product-info">
                    <h2>{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                    <span>Категория: {{$product->category_id}}</span>
                    <span>Цена: {{$product->price}}</span>
                    @if ($product->discount === 1)
                        <span>Цена по акции: {{$product->discount_price}}</span>
                    @endif
                </div>
            </div>
    </div>
@endsection