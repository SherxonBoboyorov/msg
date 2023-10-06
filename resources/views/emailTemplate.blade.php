<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact us</title>
</head>
<body>
    <p><strong>Name: </strong> {{ $fullname}}</p>
    <p><strong>Email: </strong> {{ $gmail }}</p>
    <p><strong>Phone Number: </strong> {{ $phone_number }}</p>
    <p><a href="{{ $image }}" download="">File: </a>{{ $image }}</p> 
     <br>

    <h2>Comment: </h2>
     {{ $comment }}

</body>
</html>