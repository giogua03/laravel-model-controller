<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FILM</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>HOME</h1>
    @foreach ($movies as $movie)
        <ul>
            <li><h3>{{ $movie->title }}</h3></li>
            <span >titolo in lingua originale :</span>
            <span class="or">{{ $movie->original_title }}</span>
        </ul>
    @endforeach
</body>
</html>