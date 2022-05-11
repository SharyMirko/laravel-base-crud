@extends('template.base')
@section('pageTitle')
    Marvel is better
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $item)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href='comics/{{ $item->id }}' class="btn btn-primary">More please</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($comics->hasPages())
            <nav>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($comics->onFirstPage())
                        <li class="disabled" aria-disabled="true"><span>@lang('pagination.previous')</span></li>
                    @else
                        <li><a href="{{ $comics->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($comics->hasMorePages())
                        <li><a href="{{ $comics->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
                    @else
                        <li class="disabled" aria-disabled="true"><span>@lang('pagination.next')</span></li>
                    @endif
                </ul>
            </nav>
        @endif
    </div>
@endsection
