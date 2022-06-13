@extends('layouts/main')


@section('index')

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/mysite.css">
    </head>
    <body>
        @foreach ($departments as $dept)
            <div class="grid-container">
                <div class="grid-item">
                    <div class="container"> 
                @csrf
                        <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3 mx-5">
                            <div class="card-deck">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src= "{{$dept->image}}" style="width:350px;height:350px;">
                                        </div>
                                        <div class="flip-card-back">
                                            <h1>{{$dept->department_name}}</h1>
                                            <p><br>{{$dept->description}}</p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach      
    </body>
</html>    



@stop
