<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
    public function about(){
        return view('about');
    }
    public function show($id){
        $movie = Movie::findOrFail($id);
        return view('movie.show', $movie);
    }
}


/*
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function show($id){
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }
}

*/
