@extends('layouts.app')

@section('content')

    <div class="Action">
        Action
    </div>

    <div class="btn btn-primary">next</div>

    <script>
       $(document).ready(function(){
  $(".btn").click(function(){
    $(".horizonalscroll").scrollLeft(300);
  });

});
    </script>

    <div class="container-fluid horizonalscroll">   
 
    @forelse($movies as $movie)
        
        <a href="/detail/{{$movie->id}}" class="posterLink">
            <img src="/images/{{ $movie->movie_poster }}" alt="" class="poster">
            <div class="title">{{ $movie->movie_name }} </div>
            <div>{{ $movie->genre }}</div>
            <div>{{ $movie->release_year }}</div>
        </a>
    
    @empty        
            <p class="text-center">We don't have any data yet! Please Come Back Later</p>
    @endforelse


    </div>

    <div class="Action">
        Animation
    </div>
    
    <div class="container-fluid horizonalscroll ">   
 
    @forelse($movies as $movie)
        
        <a href="/detail/{{$movie->id}}" class="posterLink">
            <img src="/images/{{ $movie->movie_poster }}" alt="" class="poster">
            <div class="title">{{ $movie->movie_name }} </div>
            <div>{{ $movie->genre }}</div>
            <div>{{ $movie->release_year }}</div>
        </a>
    
    @empty        
            <p class="text-center">We don't have any data yet! Please Come Back Later</p>
    @endforelse


    </div>
    <script src="{{ asset('js/app.js') }}" defer></script> 

        <!-- <div class="flex-center position-ref full-height"> -->
            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
@endsection
