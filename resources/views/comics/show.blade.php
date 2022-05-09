@extends('template.base')
@section('pageTitle')
    {{ $comics->title }}
@endsection
@section('content')
    <h1>{{ $comics->title }}</h1>

    <span>{{ $comics->description }}</span>
@endsection
