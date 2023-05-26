@extends('layouts.main')
    @section('service')
    <div class="content-wrap">
        <h2>Добавить услугу</h2>
        <form action="{{route('service.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="service-title" class="form-label"></label>
                <input name="name" type="text" class="form-control" id="service-title" placeholder="Название услуги">
            </div>
            <div class="mb-3">
                <label for="service-desc" class="form-label"></label>
                <textarea name="description" class="form-control" id="service-desc" placeholder="Описание услуги"></textarea>
            </div>
            <div class="mb-3">
                <label for="service-time" class="form-label"></label>
                <input name="time" type="text" class="form-control" id="service-time" placeholder="Время выполнения">
            </div>
            <div class="mb-3">
                <label for="service-price" class="form-label"></label>
                <input name="price" type="text" class="form-control" id="service-price" placeholder="Цена">
            </div>
            <input type="submit" class="btn btn-primary" value="Добавить услугу">
        </form>
    </div>
    @endsection