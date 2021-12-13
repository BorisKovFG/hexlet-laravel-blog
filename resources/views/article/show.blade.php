@extends('layouts.app')

@section('content')
    <h2>{{$article->name}}</h2><div>
        {{Str::limit($article->body, 200)}}</div>
@endsection
