@extends('layouts.app')
@section('content')
    <h1 class="text-center">Movies</h1>
    
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                    <div class="col-3 g-2">
                        <div class="card bg-secondary" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$movie['title']}}</h5>
                                <p class="card-text">Nationality: {{$movie['nationality']}}</p>
                                <p class="card-text">Date: {{$movie['date']}}</p>
                                <p class="card-text">Date: {{$movie['vote']}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>
@endsection