@extends('layouts/main')

@section('viewAttendeesInfo')
<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>success</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
        <link rel="stylesheet" href="css/mysite.css">
    </head>
    
    <body> 
          <div class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto" style="width: 12rem; height:35rem;">
            <div class="card-body">
              <h5 class="card-title">Dryice Hospital</h5>
              <h6 class="card-subtitle mb-2 text-muted">Jwagal,Lalitpur</h6>
              <p>Patient Detail Card</p>
              <div class="grid-container">
                <div class="grid-item">
                  <h5>Patient Details</h5>
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <p class="card-text text-left">Name: {{$info_attendee->name}}</p>
                      <p class="card-text text-left">Age: {{$info_attendee->age}}</p>
                      <p class="card-text text-left">Problem: {{$info_attendee->problem}}</p>
                      <p class="card-text text-left">Email: {{$info_attendee->email}}</p>
                      <p class="card-text text-left">Phone no: {{$info_attendee->contact}}</p>
                      <p class="card-text text-left">Appointment Date: {{$info_attendee->date}}</p>
                      <p class="card-text text-left">Department: {{$info_attendee->department_name}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-container">
                <div class="grid-item"> 
                  <h5>Test-Detail</h5>
                  <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-text text-left">Disease: {{$info_attendee->disease}}</p>
                        <p class="card-text text-left">Medicine: {{$info_attendee->medicine}}</p>
                        <p class="card-text text-left">Next Visit Date: {{$info_attendee->next_visiting_date}}</p>
                        <p class="card-text text-left">Examined by: {{$info_attendee->doctors_name}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div method="get" action="downlaod">
           <input type="submit" value=" Download Report" class="btn btn-primary">
          </div> --}}
          </div>
          
    </body>
  </html>
@endsection