@extends('layout.main')

@section('content')

<h1 class="text-center mb-5">Dettagli film</h1>

<div class="container text-center">

    <ul class="list-group list-group-flush border-white">
        <li class="list-group-item bg-dark text-white border-white"><h3>{{$movie->title}}</h3></li>
        {{-- stampo il titolo originale solo se diverso da quello base --}}
        @if ($movie->title !== $movie->original_title)
            <li class="list-group-item bg-dark text-white border-white">
                <h4>{{$movie->original_title}}</h4>
            </li>
        @endif
        <li class="list-group-item bg-dark text-white border-white text-capitalize"><strong>Lingua:</strong> {{$movie->nationality}}</li>
        <li class="list-group-item bg-dark text-white border-white"><strong>Data di uscita:</strong> {{date_format(date_create($movie->date), "d/m/Y")}}</li>
        <li class="list-group-item bg-dark text-white border-white"><strong>Voto:</strong> {{$movie->vote}}</li>
    </ul>

</div>

@endsection
