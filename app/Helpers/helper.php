<?php

use Carbon\Carbon;
use App\Models\Log;
use App\Models\Genre;
use Illuminate\Support\Facades\Auth;

function getGenre() {
    return Genre::all();
}

function createLog($activity) {
    return Log::create(['name' => Auth::user()->name ,'date' => Carbon::now(), 'activity' => $activity]);
}
