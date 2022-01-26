@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="text-center">Add new DC comic</h1>

        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="mb-4">
                        <label for="series" class="form-label">Serie</label>
                        <input type="text" class="form-control" name="series" id="series">
                    </div>

                    <select name="type" id="type" class="form-control">
                        <option value="comic book">Comic book</option>
                        <option value="Graphic novel">Graphic novel</option>
                    </select>

                    <div class="mb-4">
                        <label for="sale_date" class="form-label">Sale date</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date"
                        placeholder="YYYY/MM/DD">
                    </div>

                    <div class="mb-4">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price"
                        placeholder="$/€">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description" id="description" rows="10"></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" name="thumb" id="thumb">
                    </div>

                    <button type="submit" class="btn btn-primary">Add new comic</button>

                </form>
            </div>
        </div>
    </div>
@endsection