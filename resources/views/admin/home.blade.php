@extends('layouts/adminmain')

@section('content')
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1 class="text-success text-center">Welcome {{session('LoggedUser')['name']}}!<br></h1>
            

</html>

@endsection