@extends('layouts.app')

@section('content')
<div class="homepage-bg">
<div class="container">
    <h1>Home</h1>

    <!-- Sezione Libri -->
    <h2>Books</h2>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $book->cover_image }}" class="card-img-top" alt="{{ $book->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->plot }}</p>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Sezione Film -->
    <h2>Movies</h2>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->original_title }}</p>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</div>
@endsection
