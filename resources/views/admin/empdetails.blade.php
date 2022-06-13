@extends('layouts/adminmain')

@section('viewemployee')

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
            <th scope="col">Email</th>
            <th scope="col">Department</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)      
            <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->department_name}}</td>
              {{-- <td>
                <a href="view?id={{$attendee->id}}" class="btn btn-primary" >View</a>
              </td>
              <td>
                <a href="edit?id={{$attendee->id}}" class="btn btn-warning">Edit</a>
                </td>--}}
              <td>
                <a href="empdelete?id={{$user->id}}" class="btn btn-danger">Delete</a>
              </td> 
            </tr>
          @endforeach
        </tbody>
      </table>
</body>
</html>
    
@endsection