<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1> LISTA </h1>
        <div>
        @foreach($tutors as $tutor)
            {{$loop->iteration}}
            {{$tutor->name}}
            {{$tutor->rating}}
            {{$tutor->education}}
            <a href="{{ route('show', ['id' => $tutor->id]) }}">Szczegóły</a>
            <br>

        @endforeach


    </div>
</body>

</html>