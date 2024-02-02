@extends('layout.app')

@section('main-content')
<h1>Home User</h1>




<div id="home-user" class="container-fluid">
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card mb-3" style="width: 18rem;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><p> {{ $movie['title']  }}</p></h5>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    


@endsection