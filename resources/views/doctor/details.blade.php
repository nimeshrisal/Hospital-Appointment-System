@extends('layouts/doctormain')

@section('viewAttendees')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>attendees</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Problem</th>
            <th scope="col">Email</th>
            <th scope="col">Contact</th>
            <th scope="col">Reference Number</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($doctor as $attendee)      
            <tr>
              <th scope="row">{{$attendee->id}}</th>
              <td>{{$attendee->name}}</td>
              <td>{{$attendee->problem}}</td>
              <td>{{$attendee->email}}</td>
              <td>{{$attendee->contact}}</td>
              <td>{{$attendee->ref_no}}</td>
              <td>
              @if($attendee->id)

                <a href="docview?id={{$attendee->id}}" class="btn btn-primary" >View and Update</a>

              @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
    
@endsection