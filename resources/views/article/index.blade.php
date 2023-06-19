@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <a href="{{route('articles.show', ['id' => $article->id])}}"><h2>{{$article->name}}</h2></a>
        <div>{{Str::limit($article->body, 200)}}</div>
    @endforeach
@endsection
