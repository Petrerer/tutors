<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacje</title>
</head>

<body>
    <div class="container">
        <h1> {{$tutor->name}} </h1>
        {{$tutor->email}} <br>
        {{$tutor->phone_number}} <br>
        {{$tutor->subject}} <br>
        {{$tutor->rating}} <br>
        {{$tutor->education}} <br>
        {{$tutor->experience}} <br>
    </div>
</body>

</html>