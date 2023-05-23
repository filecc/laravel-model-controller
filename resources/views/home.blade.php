@extends('layouts.general')
@section('content')
    <div class="container py-4 h-100">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
            @foreach ($movies as $movie)
                <div class="col p-2">
                    <div class="card h-100 shadow-sm">
                        <img class="img-card-top" src="{{ $movie->image }}" alt="{{ $movie->title }}">
                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                            <h6 class="card-title">{{$movie->title}}</h6>
                            <a href="#" class="btn btn-outline-primary w-100">Dettagli</a>
                          </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
