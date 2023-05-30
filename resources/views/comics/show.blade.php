@extends('layouts.app')

@section('content')
    <div class="conteiner d-flex flex-column align-items-center my-5 px-5">
        <a class="btn btn-success my-4" href="{{ route('comics.index') }}">Back to comics list</a>

        <h2 class="mb-4">Details of the comic {{ $comic->title }}</h2>
        <div class="d-flex">
            <img class="w-25" src="{{ $comic->image }}" alt="">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Price: </strong> {{ $comic->price }}
                </li>
                <li class="list-group-item">
                    <strong>Series: </strong> {{ $comic->series }}
                </li>
                <li class="list-group-item">
                    <strong>Sale Date: </strong> {{ $comic->sale_date }}
                </li>
                <li class="list-group-item">
                    <strong>Type: </strong> {{ $comic->type }}
                </li>
                <li class="list-group-item">
                    <strong>Description: </strong> {{ $comic->description }}
                </li>
            </ul>

        </div>
        
    </div>
@endsection