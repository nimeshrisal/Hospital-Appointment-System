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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



{{-- <ul>
  
  <li><a href="docviewattendees">View My Appointments</a></li>
  <li style="float:right"><a class="active" href="logout">logout</a></li>
</ul> --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link " href="docviewattendees">View Appointments</a>
      </li>
    </ul>
    </div>
    
    <form class="form-inline" >
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"><a href="logout">logout</a></button>
    </form>
  </nav>
  