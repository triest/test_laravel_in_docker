@extends('welcome')

@section('content')

        <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$article->title}}</h2>
                <p class="lead">
                    {{$article->description}}
                </p>
            </div>
            Views: {{$article->views}}
            <div class="card-footer text-muted">
                <a href="#">Back</a>
            </div>
        </div>

@endsection