@extends('layouts.main')

@section('content')
<section>
    <div class="container">
        <h1>Comics List</h1>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <td>Id</td>
                    <td>Title</td>
                    <td>Price</td>
                    <td>Type</td>
                    <td colspan="2">Action</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-primary"
                            href="{{ route('comics.show',$comic->id) }}">
                                Show Details
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</section>
@endsection