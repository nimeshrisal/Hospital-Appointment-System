@extends('layouts/doctormain')

@section('app_view')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>view</title>
    </head>
    <body>

        <div class="d-flex aligns-items-center justify-content-center card text-center w-40 mx-auto" style="width: 18rem">
            <div class="card-body">
              <p class="card-text text-left">Name: {{$app_data->name}}</p>
              <p class="card-text text-left">Age: {{$app_data->age}}</p>
              <p class="card-text text-left">Problem: {{$app_data->problem}}</p>
              <p class="card-text text-left">Email: {{$app_data->email}}</p>
              <p class="card-text text-left">Phone no: {{$app_data->contact}}</p>
              <p class="card-text text-left">Appointment Date: {{$app_data->date}}</p>
              <p class="card-text text-left">Department: {{$app_data->department_name}}</p>
              <p class="card-text text-left">Doctor: {{$app_data->doctors_name}}</p>
              <p class="card-text text-left">Reference Number: {{$app_data->ref_no}}</p>
            </div>
        </div>    
        <form action = "doceditAttendees" method="post">
            @csrf
                
                <h2 class="text-center">Patient Report</h2>
                <div class="form-group" >
                    <input type="hidden" class="form-control" id="id"  value="{{$app_data->id}}"  name="id" >
                    <label for="disease">Disease</label>
                    <input type="text" class="form-control" id="dept"  name="disease" value="{{$app_data->disease}}"  >
                </div>
                <div class="form-group" >
                    <label for="med">Medicine</label>
                    <input type="text" class="form-control" id="doc" name="med" value="{{$app_data->medicine}}" >
                </div>
                 <div class="form-group" >
                    <label for="date">Next Visit After: </label>
                    <input type="date" class="form-control" id="visitdate"  name="visitdate" value="{{$app_data->next_visiting_date}}" >
                </div>
                <div class="form-group" >
                    <label for="doc">Examined By: </label>
                    <input type="text" class="form-control" id="doc"  name="doc"  value="{{session('LoggedUser')['name']}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                
        </form>

    </body>
    </html>
    
@endsection