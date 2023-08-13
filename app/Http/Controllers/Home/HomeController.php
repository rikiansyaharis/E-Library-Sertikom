<?php

namespace App\Http\Controllers\Home;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Home',
            'data' => Book::latest()->take(4)->get(),
            'collection' => Book::all(),
            'genre' => Genre::all(),
        ];
        return view('user.home', $data);
    }

}
