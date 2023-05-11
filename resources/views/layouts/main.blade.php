<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">

    <title>Посты</title>
</head>
<body>
    <header>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="https://i.pinimg.com/originals/a7/99/1c/a7991ce99d9e3c6e33a1fa7616c59605.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://static.tildacdn.com/tild3630-6661-4761-b533-376561366565/sql.png" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="https://www.digiseller.ru/preview/1027191/p1_3233025_95c6777e.jpeg" alt="">
                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
        </div>
        <div class="container">
            <nav class="row">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="{{ route('product.index') }}">Каталог</a></li>
                    <li><a href="/card">Корзина</a></li>
                    <li><a href="/discount">Скидки</a></li>
                    <li><a href="{{ route('contact.index') }}">Контакты</a></li>
                    <li><a href="{{ route('about.index') }}">О нас</a></li>
                    <li><a href="{{ route('post.index') }}">Посты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    @yield('products')
</body>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</html>