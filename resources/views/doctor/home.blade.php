@extends('layouts/doctormain')

@section('content')
<html>
<h1 class="text-success text-center">Welcome {{session('LoggedUser')['name']}}!<br></h1>
            
                    
</html>

@endsection
