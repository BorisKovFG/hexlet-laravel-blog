{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Laravel | About</title>--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="container mt-4">--}}
{{--    <h1>О блоге</h1>--}}
{{--    <p>Эксперименты с Ларавелем на Хекслете!</p>--}}
{{--    @foreach($team as $user)--}}
{{--        <p>{{$user['name']}} - {{$user['position']}}</p>--}}
{{--    @endforeach--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

@extends('layouts.app')
<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'О блоге')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <h1>О блоге</h1>
    <p>Эксперименты с Laravel на Хекслете!</p>
@endsection
@section('foreach')
    @foreach($team as $user)
        <p>{{$user['name']}} - {{$user['position']}}</p>
    @endforeach
@endsection

