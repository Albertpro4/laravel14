@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Личный кабинет</h1>
        <p class="lead"> Добро пожаловать.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">Загрузить документы;</a>
        @endauth

        @guest
        <h1>РАНХиГС</h1>
        <p class="lead">Чтобы подать заявку, Вам необходимо Зарегистрироваться.</p>
        @endguest
    </div>
@endsection