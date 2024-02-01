@extends('layout.app')

@section('main-content')
<h1>Home User</h1>

@foreach ($movies as $movie)

<p> {{ $movie['title']  }}</p>
    
@endforeach

@endsection