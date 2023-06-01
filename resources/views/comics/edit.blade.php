@extends('layouts.app')

@section('content')
<div class="container">

    <div class="my-3">
        <a class="btn btn-success my-4" href="{{ route('comics.index') }}">Back to comics list</a>
    </div>

    <h2>Update Comic: {{ $comic->title }}</h2>

    @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}">
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $comic->image) }}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select id="type" name="type" class="form-select">
                <option></option>
                <option @selected(old('type', $comic->type) === 'comic book') value="comic_book">comic book</option>
                <option @selected(old('type', $comic->type) === 'graphic novel') value="grapgic_novel">graphic novel</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series"
                value="{{ old('series', $comic->series) }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $comic->description) }}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Send</button>
    </form>
</div>
@endsection