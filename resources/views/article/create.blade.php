@extends('layouts.app')

@section('content')
    {{ Form::model($article, ['route' => 'articles.store']) }}
        @include('article.form')
        {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection
