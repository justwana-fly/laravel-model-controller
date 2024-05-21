@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->original_title }}</p>
                        <p class="card-text">{{ $movie->language }}</p>
                        <p class="card-text">{{ $movie->date }}</p>
                        <p class="card-text">{{ $movie->vote }}</p>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
