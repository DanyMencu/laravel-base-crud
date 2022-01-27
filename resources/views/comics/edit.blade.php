@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit comic: {{ $comic->title }}</h1>

        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-4">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
                    </div>

                    <select name="type" id="type" class="form-control">
                        <option value="comic book"
                        @if ($comic->type == 'comic book')selected @endif >
                        Comic book</option>
                        <option value="graphic novel"
                        @if ($comic->type == 'graphic novel')selected @endif >
                            Graphic novel</option>
                    </select>

                    <div class="mb-4">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date"
                        value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price"
                        value="{{ $comic->price }}">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description" id="description" rows="10"> {{ $comic->description }} </textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
                    </div>

                    <button type="submit" class="btn btn-success">Edit details</button>

                </form>
            </div>
        </div>
    </div>
@endsection