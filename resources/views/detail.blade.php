@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        
        
        <div class="detailgrid">    
          
                <img src="/images/{{$movie->movie_poster}}" alt="" class="image" >                 
        
            <div class="col-lg-9 movieContainer">
               
                <div class="col-lg-9 title">
                    {{$movie->movie_name}}
                </div>

                <div class="col-lg-9 margin">
                    Cast : {{$movie->actors}}
                </div>

                <div class="col-lg-9 margin">
                    Release Year : {{$movie->release_year}}
                </div>

                <div class="col-lg-9 margin">
                    Rating :{{$movie->rating}}
                </div>

                <div class="col-lg-9">
                    Scenario
                </div>

                <div class="col-lg-9">
                    {{$movie->brief_explain}}
                </div>
              
                
                <a href="/watch/{{$movie->id}}" style="text-decoration:none;">
                    <div class="mt-4 watch-now-button">
                        Watch Now
                    </div>
                
                </a>
                
                
            </div>
           
        </div>

       </div>


        <div class="relatedmovie">
        
            <center>
                Related Movies
            </center>

           
                    <div class="horizonalscroll">    
                        <a href="/detail" class="posterLink mt-3">
                            <img src="/images/{{$movie->movie_poster}}" alt="" class="poster">
                            <div class="text">Movie Name :</div>
                            <div>Actors : </div>
                        </a>
                        <a href="/detail" class="posterLink mt-3">
                            <img src="/images/{{$movie->movie_poster}}" alt="" class="poster">
                            <div class="text">Movie Name :</div>
                            <div>Actors : </div>
                        </a>
                        <a href="/detail" class="posterLink mt-3">
                            <img src="/images/{{$movie->movie_poster}}" alt="" class="poster">
                            <div class="text">Movie Name :</div>
                            <div>Actors : </div>
                        </a>
                        <a href="/detail" class="posterLink mt-3">
                            <img src="/images/{{$movie->movie_poster}}" alt="" class="poster">
                            <div class="text">Movie Name :</div>
                            <div>Actors : </div>
                        </a>
                        <a href="/detail" class="posterLink mt-3">
                            <img src="/images/{{$movie->movie_poster}}" alt="" class="poster">
                            <div class="text">Movie Name :</div>
                            <div>Actors : </div>
                        </a>
                    </div>
            </div>
        
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script> 
    

@endsection