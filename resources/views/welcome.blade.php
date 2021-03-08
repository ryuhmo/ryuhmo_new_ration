@extends('layout.layout')
@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">"
    <img src="/img/ff.jpg" alt="pizza logo" width="80%" height="200 px">
        <div class="title m-b-md">
             MIZORAM BEST PIZZA<br>
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Variety</a>
            <a href="https://laracasts.com">Contact us</a>
            <a href="https://laravel-news.com">HOME Page</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">Transaction</a>
        </div>
    </div>
</div>
 @endsection 
  
