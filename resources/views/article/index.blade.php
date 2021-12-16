@extends('layouts.app')

@section('content')

{{--    {{ Form::model($articles, []) }}--}}
{{--    {{ Form::label('name', 'Имя') }}--}}
{{--    {{ Form::text('name') }}--}}
{{--    {{ Form::label('body', 'body') }}--}}
{{--    {{ Form::email('body') }}--}}
{{--    {{ Form::submit('Создать') }}--}}
{{--    {{ Form::close() }}--}}

    {{Form::open(['url' => route('articles.index'), 'method' => 'GET'])}}
    {{-- Имя пользователя передано из экшена --}}
        {{Form::text('wordForSearching', $wordForSearching)}}
        {{Form::submit('Searching!')}}
    {{Form::close()}}
    <div>
        <a href="{{route('articles.create')}}">Create new article</a>
    </div>
    <h1>Список статей</h1>
    Str::limit – функция-хелпер, которая обрезает текст до указанной длины
    Используется для очень длинных текстов, которые нужно сократить
    @foreach ($articles as $article)
        <p><a href="{{route('articles.show', $article->id)}}">{{$article->name}}</a></p>
        <div>{{Str::limit($article->body, 100)}}</div>
        <div><a href="{{ route('articles.edit', $article) }}">EDIT</a> </div>
    @endforeach
{{--    {{$articles->links()}}--}}
@endsection
