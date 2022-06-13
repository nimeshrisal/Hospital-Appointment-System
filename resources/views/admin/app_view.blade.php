@extends('layouts/adminmain')

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

    </body>
    </html>
    
@endsection