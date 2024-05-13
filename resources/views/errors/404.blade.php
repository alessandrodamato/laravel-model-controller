@extends('layout.main')

@section('content')

<div class="container text-center">

    <h3 class="pt-5 mb-3">Url inesistente</h3>

    <a href="{{route('home', '')}}" class="btn btn-dark">Torna alla home</a>

</div>

@endsection
