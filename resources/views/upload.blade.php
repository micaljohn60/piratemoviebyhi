@extends('layouts.app')

@section('content')


<div class="container">

    <center>
    <input type="radio" id="moviefileid" name="moviefile" value="movie" checked>
            <label for="male">Movie</label>
    <input type="radio" id="seriesfileid" name="moviefile" value="series">
            <label for="female">Series</label><br>
    
    </center>       

    <div class="text-center ">
       <form action="/upload" method="POST" enctype="multipart/form-data" id="uploadForm">
        @csrf
    <div class="form-row">

        <div class="col-md-6 mb-3">
            <label for="name">Movie Name</label>
            <input type="text" class="form-control textBorder" name="moviename">
        </div>

        <div class="col-md-6">
            <label for="actor">Actors</label>
            <input type="text" class="form-control textBorder" name="actors">
        </div>

        <div class="col-md-6 mb-5">
        <label for="rating">Rating</label>
            <input type="text" class="form-control textBorder"  name="rating">

        </div>   
        <div class="col-md-6 mb-5">
        <label for="rating">Release_year</label>
            <input type="text" class="form-control textBorder"  name="release_year">

        </div>         

        <div class="col-md-6">
            <div class="custom-file">            
                <input type="file" class="custom-file-input" name="image" id="customFile">
                <label for="customFile" class="custom-file-label textBorder">Poster</label>
            </div>
        </div>

         
        <div class="col-md-6">      

        
            <div id="moviefile">
                <input type="file" class="custom-file-input" name="moviefile" id="uploadFile">
                <label for="customFile" class="custom-file-label textBorder" >Movie File</label>
            </div>
            

            <div class="progress mt-4">

                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            0%
                </div>

            </div>

            <div id="targetLayer"></div>
        </div>

        <div class="col-md-6 mt-3">
            <label for="briefexplain">Brief Explain</label>
            <textarea class="form-control textBorder" name="explain" maxlength = "255" ></textarea>
        </div>

        

        <div class="col-md-6 mt-5">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Genre</label>
                </div>
                <select name="genre" class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="Action">Action</option>
                    <option value="Animation">Animation</option>
                    <option value="Romance">Romance</option>
                    <option value="Science-Fiction">Science-Fiction</option>
                </select>
            </div>
        </div>

    </div>


</div>

 
        <input type="submit" name="submit" id="uploadSubmit" value="submit" class="btn btn-outline-primary mt-3 submitButton">

       </form>

       <div id="loader-icon" style="display:none;"><img src="/images/loader.gif" alt=""></div>

        <div>
      
        </div>
    </div>
 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/css/jquery.form.min.js"></script> 
    
  
    <script>

  
$(document).ready(function(){
  $("#seriesfileid").click(function(){
    $("#moviefile").hide(1000);
  });
  $("#moviefileid").click(function(){
    $("#moviefile").show(1000);
  });
});
    

        $(document).ready(function(){

            $('#uploadForm').submit(function(e){
            if($('#uploadFile').val()){
                e.preventDefault();
                $('#loader-icon').show()
             
                $(this).ajaxSubmit({
                    
                    beforeSubmit:function(){
                        $('.progress-bar').width('0%')
                    },
                    uploadProgress: function(event, position, total, percentComplete){
                        $(".progress-bar").width(percentComplete+'%')
                        $(".progress-bar").html('<div id="progress-status">'+percentComplete+'%</div>')
                    },
                    success:function(){
                        $('#loader-icon').hide()  
                       

                    },                    
                })
              
            }
        });
        });

  

    </script>
   


@endsection