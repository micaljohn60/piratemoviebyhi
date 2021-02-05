@extends('layouts.app')

@section('content')


<video width="100%" height="650" controls="controls" controlsList="nodownload" id="videoElementID">
  <source src="/images/{{$movie->movie_file}}" type="video/mp4" >
</video> 
<script src="{{ asset('js/app.js') }}" defer></script> 
<script>
$(document).ready(function(){
   $('#videoElementID').bind('contextmenu',function() { return false; });
});
</script>

@endsection