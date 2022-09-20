<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <h1>Trains</h1>

        @foreach($trains as $train)
        <ul>
            <li>{{$train->agency}}</li>
            <li>{{$train->departures}}</li>
            <li>{{$train->arrives}}</li>
            <li>{{$train->departure_time}}</li>
            <li>{{$train->arrive_time}}</li>
            <li>{{$train->train_code}}</li>
            <li>{{$train->train_carriages}}</li>
            <li>{{$train->late}}</li>
            <li>{{$train->deleted}}</li>
        </ul>
        @endforeach

    </div>
</body>
</html>