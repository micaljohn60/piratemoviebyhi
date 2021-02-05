<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class UploadController extends Controller
{
    //

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){
        return view('/upload');
    }

    public function show(){
        $movies = Movie::all();
        return view('/welcome',['movies' => $movies]);
    }

    public function store(){

        $movie = new Movie();
        $movie->movie_name = request('moviename');
        $movie->actors = request('actors');
        $movie->release_year = request('release_year');  
        $movie->genre = request('genre');      
        $movie->rating = request('rating');
        $movie->brief_explain = request('explain');           
       
        $destinationPath = public_path().'/images';

        $movie->movie_poster = request('image')->getClientOriginalName();
        $movie->movie_file = request('moviefile')->getClientOriginalName();

        $fileName = request('image')->getClientOriginalName();    
        $fileName1 = request('moviefile')->getClientOriginalName();          

        request('moviefile')->move($destinationPath,$fileName1);        
        request('image')->move($destinationPath,$fileName);

        $movie->save();
        return redirect('/upload');
    }

}
