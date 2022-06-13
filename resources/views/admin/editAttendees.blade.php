@extends('layouts/adminmain')

@section('edit')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <title>appointment</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
    <form action = "editAttendees" method="post">
        @csrf
        <div style="margin-left: 50px">
            <div class="form-group">
                <input type="hidden" class="form-control" id="id"  value="{{$attendees->id}}"  name="id" >
                <label for="name">Name*:</label>
                <input type="name" class="form-control" id="name"  value="{{$attendees->name}}"  name="name" required>
            </div>
            <div class="form-group" >
                <label for="problem">Problem</label>
                <div class="form-group">
                <select class="form-control" id="problem" name="problem">
                    <option value="{{$attendees->problem}}">{{$attendees->problem}}</option>
                    <option value="Heart Issues">Heart Issues</option>
                    <option value="Body Pain">Body Pain</option>
                    <option value="Mental health Issues">Mental health Issues</option>
                    <option value="Bone Issues">Bone Issues</option>
                    <option value="Others">Others</option>
                    </select>
                </div>
                <div class="form-group" >
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" placeholder="Age" name="age" value="{{$attendees->age}}">
                </div>

                    <label for="gender">Gender</label>
                    <div class="form-group">
                        <select class="form-control" id="gender" name="gender" value="{{ old('gender') }}" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>

                <div class="form-group" >
                    <label for="contact">Contact Number</label>
                    <input type="text" class="form-control" id="contact" value="{{$attendees->contact}}" name="contact" required>
                </div>
                <div class="form-group" >
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" value="{{$attendees->email}}" name="email" required>
                </div>
            </div>
            <h2 class="text-center"> Appointment information </h2>
             <label for="dept">Department</label>
                    <div class="form-group">
                        <select class="form-control" id="dept" name="dept" >
                        @foreach($dept as $d)
                            <option value="{{$d->department_name}}">{{$d->department_name}}</option>
                        @endforeach
                        </select>
                    </div>
            <div class="form-group" >
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" value="{{$attendees->date}}" name="date" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</body>
</html>
    
@endsection