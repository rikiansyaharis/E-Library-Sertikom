<?php

namespace App\Http\Controllers\Administrator\Dashboard;

use App\Models\Log;
use App\Models\Book;
use App\Models\User;
use App\Models\Genre;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Dashboard Admin',
            'book' => Book::get()->count(),
            'genre' => Genre::get()->count(),
            'user' => User::get()->count(),
            'log' => Log::latest()->take(6)->get()
        ];
        return view('administrator.dashboard', $data);
    }


}
