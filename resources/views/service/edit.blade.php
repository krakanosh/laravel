@extends('layouts.main')
    @section('service')
    <div class="content-wrap">
        <h2>Редактировать услугу</h2>
        <form action="{{route('services.update', $service->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="service-title" class="form-label"></label>
                <input name="name" type="text" class="form-control" id="service-title" value="{{$service->name}}">
            </div>
            <div class="mb-3">
                <label for="service-desc" class="form-label"></label>
                <textarea name="description" class="form-control" id="service-desc">{{$service->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="service-time" class="form-label"></label>
                <input name="time" type="text" class="form-control" id="service-time" value="{{$service->time}}">
            </div>
            <div class="mb-3">
                <label for="service-price" class="form-label"></label>
                <input name="price" type="text" class="form-control" id="service-price" value="{{$service->price}}">
            </div>
            <input type="submit" class="btn btn-primary" value="Обновить">
        </form>
    </div>
    @endsection