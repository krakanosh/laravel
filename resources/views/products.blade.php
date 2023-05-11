{{-- @extends('layouts.main')
@section('content')
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
            <span>Цена: {{$product->price}}</span>
            @if ($product->discount === 1)
                <span>Цена по акции: {{$product->discount_price}}</span>
            @endif
        </div>
    @endforeach
@endsection --}}