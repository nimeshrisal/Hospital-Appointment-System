@extends('layouts/main')

@section('success')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>success</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    </head>
    <body>
        <h2 class="text-success text-center">You have been registered</h2>
        <p style="text-align: center"> Please search your appointment status using your reference number after 2 days of the booking for date, doctor's name and department <br> Thank you </p>
        <p style="text-align: center"> Reference No: {{$a_data['ref_no']}} <br> Don't loose this reference number</p>
    </body>
    </html>
@endsection