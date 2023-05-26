@extends('layouts.main')
    @section('service')
    <div class="content-wrap">
        <a class="btn btn-success" href="{{route('service.create')}}">Добавить услугу</a>
        <div class="product-item-container">
            <div class="product-item-wrap">
                @foreach ($services as $service)
                    <a class="product-item" href="{{route('services.show', $service->id)}}">
                        <h2>{{$service->name}}</h2>
                        <p>{{$service->description}}</p>
                        <span>{{$service->time}}</span>
                        <span>{{$service->price}}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @endsection