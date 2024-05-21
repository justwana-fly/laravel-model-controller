@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $book->title }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $book->cover_image }}" class="img-fluid" alt="{{ $book->title }}">
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item"><strong>Plot:</strong> {{ $book->plot }}</li>
                <!-- Aggiungi altri dettagli del libro qui -->
            </ul>
        </div>
    </div>
    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back to Books</a>
</div>
@endsection
