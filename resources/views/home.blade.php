@extends('layout.main')

@section('content')

<h1 class="text-center mt-3 mb-5">Home - {{ $title }}</h1>

<h2></h2>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3  row-cols-xl-4">

        @foreach ($movies as $movie)
        <div class="col d-flex justify-content-center">
            <div class="card mb-5 bg-dark text-white" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    {{-- stampo il titolo originale solo se diverso da quello base --}}
                    @if ($movie->title !== $movie->original_title)
                        <h6>{{$movie->original_title}}</h6>
                    @endif
                </div>
                <ul class="list-group list-group-flush border-white">
                    <li class="list-group-item bg-dark text-white border-white text-capitalize"><strong>Lingua:</strong> {{$movie->nationality}}</li>
                    <li class="list-group-item bg-dark text-white border-white"><strong>Data di uscita:</strong> {{date_format(date_create($movie->date), "d/m/Y")}}</li>
                    <li class="list-group-item bg-dark text-white border-white"><strong>Voto:</strong> {{$movie->vote}}</li>
                </ul>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
