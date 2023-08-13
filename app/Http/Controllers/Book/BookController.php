<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index(Request $request) {
        $data = Book::query();

        $search = null;
        if($request->has('search')) {
            $data = $data->where('name','LIKE', '%' . $request->search . '%');
            $search  = $request->search;
        }

        $data = $data->orderBy('name', 'asc');
        $data = [
            'title' => 'Semua Buku',
            'data' => $data->get(),
            'collection' => Book::all(),
            'genre' => Genre::all(),
            'search' => $search
        ];
        return view('user.book.index', $data);
    }

    public function genre($genre)
    {
        $data = [
            'data' => Book::wherehas('genre', function ($query) use ($genre) {
                $query->where('name', $genre);
            })->get(),
        ];

        return view('user.book.index', $data);
    }


    public function details(Book $book) {
        $data = [
            'genre' => Genre::all(),
            "data" => $book
        ];
        $book->update(['count_views' => $book->count_views + 1]);
        return view('user.book.detail', $data);
    }

    public function search(Request $request) {
        if ($request->has('search')) {
            $search = Book::where('name','LIKE', '%' . $request->search . '%')->get();
        }
        else {
            $search = Book::all();
        }

        return view('user.book.index', $search);
    }
}
