@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Comic details</h1>

        <h3>{{ $comic->title }}</h3>
        <div class="row mb-3">
            <img class="col-6 img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="col-6">
                <p>{{ $comic->description }}</p>
                <ul>
                    <li>
                        <strong>Price: </strong> {{ $comic->price }}
                    </li>
                    <li>
                        <strong>Series: </strong> {{ $comic->series }}
                    </li>
                    <li>
                        <strong>Type: </strong> {{ $comic->type }}
                    </li>
                </ul>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Return to list</a>
            </div>
        </div>
    </div>
@endsection