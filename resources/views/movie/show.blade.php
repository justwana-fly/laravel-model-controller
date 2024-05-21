@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $movie->title }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $movie->image }}" class="img-fluid" alt="{{ $movie->title }}">
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item"><strong>Original Title:</strong> {{ $movie->original_title }}</li>
                <li class="list-group-item"><strong>Language:</strong> {{ $movie->language }}</li>
                <li class="list-group-item"><strong>Release Date:</strong> {{ $movie->date }}</li>
                <li class="list-group-item"><strong>Vote:</strong> {{ $movie->vote }}</li>
            </ul>
        </div>
    </div>
    <a href="{{ route('movies.index') }}" class="btn btn-secondary mt-3">Back to Movies</a>
</div>
@endsection
