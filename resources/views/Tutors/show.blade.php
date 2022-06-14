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
        <a href="{{route('tutors.list')}}"> 
            <img src="{{ asset('images/logo.png') }}">
        </a>

        <br>

        <div>
            <h1> {{$tutor->name}} </h1>
        Mail: {{$tutor->email}} <br>
        Numer Telefonu: {{$tutor->phone_number}} <br>
        Przedmiot: {{$tutor->subject}} <br>
        Ocena: {{$tutor->rating}} <br>
        Edukacja: {{$tutor->education}} <br>
        Doświadczenie: {{$tutor->experience}} <br>
        <br>
        </div>

        <div>
            <h4> <a href="{{ route('tutors.destroy', ['id'=> $tutor->id])}}"> Usuń </a> </h4>
            <h4> <a href="{{ route('tutors.list')}}"> Powrót </a> </h4>
        </div>

        <h3> Opinie: </h3>
    </div>
</body>

</html>