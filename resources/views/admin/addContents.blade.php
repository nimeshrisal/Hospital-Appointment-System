@extends('layouts/adminmain')

@section('addDetails')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>addDetails</title>
</head>
<body>
    <form method="POST" action="addDetails"style="margin-left: 50px; margin-right:50px">
      @csrf
        <div class="form-group">
          <label for="name">Department Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label for="image-source">image Source</label>
            <input type="text" class="form-control" name="image">
          </div>
          <div class="form-group">
            <label for="dept_no">Department Number</label>
            <input type="number" class="form-control" name="dept_no">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
    
@endsection