@extends('layouts/main')

@section('search')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Search</title>
</head>
<body>
    <h1>Search Your Appointment</h1><br><br>
    <form class="form-inline" action="searchAttendee" method="post">
      @csrf
        <div class="form-group mx-sm-3 mb-2">
          <label for="ref_no" class="sr-only">Enter reference number</label>
          <input type="number" class="form-control" id="ref_no" placeholder="reference number" name="ref_no">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="ref_no" class="sr-only">Enter Email</label>
          <input type="email" class="form-control" id="email" placeholder="registered email" name="email">
        </div>
        <button type="submit" class="btn btn-primary mb-2">search</button>
      </form>
</body>
</html>
    
@endsection