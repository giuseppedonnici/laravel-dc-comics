@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Our Comics</h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col">Azioni</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                
                </tbody>
          </table>
    </div>
    
@endsection 