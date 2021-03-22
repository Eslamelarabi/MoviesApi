<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MoviesController extends Controller
{
    public static function index(){
        $movies = Movie::get();
        return  response()->json([
            'message' => 'list of all movies',
            'movies' => $movies
        ],
            200);
    }

    public static function show($id){
        $movie = Movie::findOrFail($id);
        return response()->json([
            'message' => 'Movie Details',
            'Movie' => $movie,
        ],
        200);
    }

    public static function getRated(){
        $movies = Movie::orderBy('popularity','DESC')->get();
        //dd($movies);
        return  response()->json([
            'message' => 'movies ordered by popularity',
            'movies' => $movies
        ],
            200);
    }
}
