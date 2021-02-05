<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class WatchController extends Controller
{
    //

    // public function watch(){
    //     $movie = Movie::all();
    //     return view('/detail/id',['movies' => $movie]);
    // }

    public function show($id){
        $movie = Movie::findOrFail($id);        
        return view('/watch',['movie' => $movie]);
    }

    public function showDetail($id){
        $movie = Movie::findOrFail($id);        
        return view('/detail',['movie' => $movie]);
    }
}
