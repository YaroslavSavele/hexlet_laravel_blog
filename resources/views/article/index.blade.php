@extends('layouts.app')

@if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@section('content')
    <h1>Список статей</h1>
    @foreach($articles as $article)
        <a href="{{route('articles.show', $article)}}"><h2>{{$article->name}}</h2></a>
        <div>{{Str::limit($article->body, 200)}}</div>
        <a href="{{route('articles.edit', $article)}}">Редактировать</a><br>
        <a href="{{route('articles.destroy', $article)}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
    @endforeach
@endsection
