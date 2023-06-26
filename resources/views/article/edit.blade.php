@extends('layouts.app')

@section('content')
    {{ Form::model($article, ['route' => ['articles.update', $article], 'method' => 'PATCH']) }}
        @include('article.form')
        {{ Form::submit('Обновить') }}
    {{ Form::close() }}
@endsection
