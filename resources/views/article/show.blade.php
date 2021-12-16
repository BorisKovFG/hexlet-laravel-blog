@extends('layouts.app')

@section('content')
    <h2>{{$article->name}}</h2>
    <div>{{$article->body}}</div>
    <br />
    <a href="{{route('articles.index')}}">articles</a>

@endsection

