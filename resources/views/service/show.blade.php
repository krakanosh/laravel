@extends('layouts.main')
    @section('service')
    <div class="content-wrap">
        <a class="btn btn-success" href="{{route('service.index')}}">Вернуться назад</a>
        <a class="btn btn-warning" href="{{route('services.edit', $service->id)}}">Редактировать услугу</a>
        <form action="{{route('services.destroy', $service->id)}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Удалить услугу</button>
        </form>
        <div class="product-item-container">
            <div class="product-item-wrap">
                <h2>{{$service->name}}</h2>
                <p>{{$service->description}}</p>
                <span>{{$service->time}}</span>
                <span>{{$service->price}}</span>
            </div>
        </div>
    </div>
    @endsection