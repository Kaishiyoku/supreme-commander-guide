@extends('_layouts.master')

@section('body')
    <h2>Main page</h2>

    <p class="lead">An unofficial Forged Alliance guide</p>

    <div class="list-group">
        @foreach ($chapters as $chapter)
            <a href="{{ $chapter->getUrl()}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $chapter->title }}</h5>
                </div>
                <p class="mb-1">{{ $chapter->subTitle }}</p>
            </a>
        @endforeach
    </div>
@endsection
