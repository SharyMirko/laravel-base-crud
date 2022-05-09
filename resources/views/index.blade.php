@extends('template.base')
@section('pageTitle')
    Marvel is better
@endsection

@section('content')
    @foreach ($comics as $item)
        {{ $item->title }}
    @endforeach
    {{ $comics->links() }}
@endsection
