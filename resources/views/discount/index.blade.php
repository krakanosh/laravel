@extends('layouts.main')
    @section('discounts')
        @foreach ($products as $product)
            <div class="product-item">
                <div class="title-wrap">
                    <div>
                    <h2>{{$product->name}}</h2>
                    <p>{{$product->description}}</p>
                    </div>
                    <img src="{{$product->image}}" alt="">
                </div>
                <span>Категория: {{$product->category_id}}</span>
                <span>Цена по акции: {{$product->discount_price}}</span>
            </div>
        @endforeach
    @endsection