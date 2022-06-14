<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <a href="{{route('tutors.list')}}"> 
            <img src="{{ asset('images/logo.png') }}">
        </a>
        <h1> LISTA </h1>
        <div>

            <table>

                <thead>
                    <tr>
                        <th>Lp</th>
                        <th>Imię</th>
                        <th>Ocena</th>
                        <th>Wykształcenie</th>
                        <th>Szczegóły</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($tutors as $tutor)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$tutor->name}}</td>
                        <td>
                            {{$tutor->rating}}
                        </td>
                        <td>{{$tutor->education}}</td>
                        <td>
                            <a href="{{ route('tutors.show', ['id' => $tutor->id]) }}">Szczegóły</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


    </div>
</body>

</html>