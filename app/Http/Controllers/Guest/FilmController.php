<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\movies;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        $movies = movies::all();

        return view('pages.index', compact('movies'));
    }



}
