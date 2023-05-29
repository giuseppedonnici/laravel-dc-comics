@extends('layouts.app')

@section('content')
    <div class="conteiner d-flex flex-column align-items-center my-4">
        <h2>Details of the comic {{ $comic->title }}</h2>
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
@endsection