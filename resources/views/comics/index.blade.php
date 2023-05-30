@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2>Our Comics</h2>
        <div class="my-2 text-end">
            <a href="{{ route('comics.create') }}">Add new Comic</a>
        </div>
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
                        <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <form class="d-inline-block" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
                </tbody>
          </table>
    </div>
    
@endsection 