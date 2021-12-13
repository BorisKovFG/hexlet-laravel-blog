@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    Str::limit – функция-хелпер, которая обрезает текст до указанной длины
    Используется для очень длинных текстов, которые нужно сократить
    @foreach ($articles as $article)
        <p><a href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></p>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
    {{$articles->links()}}
@endsection
