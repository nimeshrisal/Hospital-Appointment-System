<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

<img class="img" src="image-src/hospital.png">
<img class= "logo" style="float:right" src="image-src/tph.png" onclick="alert('You can call on: 01-8897272')">
<a href="https://www.facebook.com/dryicesolutions"><img class= "logo" style="float:right" src="image-src/fb.png"></a>



{{-- <ul>
  
  <li><a href="/adminindex">Dryice Hospital</a></li>
  <li><a href="add">Add Department</a></li>
  <li><a href="viewattendees">View Appointments</a></li>
  <li><a href="addEmployees">Add Employees</a></li>
  <li style="float:right"><a class="active" href="logout">logout</a></li>
  
</ul> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/adminindex">Hospital Appointment System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="add">Add Departments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="viewattendees">View Appointments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="addEmployees">Add Employees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="viewEmployees">View Employees</a>
      </li>
    </ul>
    </div>
    
    <form class="form-inline" >
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><a href="logout">logout</a></button>
    </form>
  
</nav>