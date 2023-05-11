@extends('layouts.main')
@section('products')
    <div class="content-wrap">
        <a class="add-item" href="{{ route('product.create') }}">Добавить товар</a>
        <div class="product-item-container">
            <div class="product-item-wrap">
                @foreach ($products as $product)
                    <a href="{{ route('product.show', $product->id) }}" class="product-item">
                        <div class="title-wrap">
                            <div>
                                <h2>{{$product->name}}</h2>
                                <p>{{$product->description}}</p>
                            </div>
                            <img src="{{$product->image}}" alt="">
                        </div>
                        <span>Категория: {{$product->category_id}}</span>
                        <span>Цена: {{$product->price}}</span>
                        @if ($product->discount === 1)
                            <span>Цена по акции: {{$product->discount_price}}</span>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection