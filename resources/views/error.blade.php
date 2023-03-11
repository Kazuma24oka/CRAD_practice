@extends('layout.layout')

@section('title', 'エラー')

@section('content')
    <h1>エラーが発生しました</h1>
    <p>{{ $exception->getMessage() }}</p>
    <hr>
    <pre>{{ $exception->getTraceAsString() }}</pre>
@endsection