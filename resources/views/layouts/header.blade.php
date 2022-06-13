<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>

<img class="img" src="image-src/hospital.png">
<img class= "logo" style="float:right" src="image-src/tph.png" onclick="alert('You can call on: 01-8897272')">
<a href="https://www.facebook.com/dryicesolutions"><img class= "logo" style="float:right" src="image-src/fb.png"></a>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Hospital Appointment System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="appointment">Book Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="search">Search Your Booking</a>
      </li>
      </ul>
    </div>
    <form method="POST" action="userlogin">
    @csrf
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Enter email" name="email" required>
        </div>
        <div class="col">
          <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
        </div>
        
        <div class="col">
          <button type="submit" class="btn btn-warning" >Login</button>
        </div>
      </div>
    </form>    
</nav>