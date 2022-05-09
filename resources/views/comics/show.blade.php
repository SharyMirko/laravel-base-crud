@extends('template.base')
@section('pageTitle')
    {{ $comics->title }}
@endsection
@section('content')
    <h1>{{ $comics->title }}</h1>
    <img src='{{ $comics->thumb }}' alt="">
    <span>{{ $comics->description }}</span>
@endsection
