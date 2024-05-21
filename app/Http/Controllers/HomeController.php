<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all(); // Recupera tutti i libri
        $movies = Movie::all(); // Recupera tutti i film
        return view('home', compact('books', 'movies'));
    }
}
