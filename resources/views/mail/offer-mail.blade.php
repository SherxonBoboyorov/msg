<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Offer Feedback from msg.uz</title>
</head>
<body>
    <p style="margin-left:10%;">Name and surname:  - <b>{{ $data->names }} </b></p>
    <p style="margin-left:10%;">Company / Hospital:  - <b>{{ $data->hospital_names }} </b></p>
    <p style="margin-left:10%;">Phone number:  - <b>{{ $data->phone }} </b></p>
    <p style="margin-left:10%;">Email:  - <b>{{ $data->email }} </b></p>
    <br>
    <p style="margin-left:10%;">Comment: - <b>{{ $data->content }}  </b></p>
</body>
</html>