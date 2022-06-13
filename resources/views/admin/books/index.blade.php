@extends('layouts.app')

@section('content')
<div class="container">


    @if ( session('message') )
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <a href=" {{Route( 'admin.books.create' )}} " class="btn btn-success">Crea</a>

    <table class="table table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Autore</th>
        <th scope="col">Immagine</th>
        <th scope="col">Anno</th>
        <th scope="col">descrizione</th>
        <th scope="col">azioni</th>
        </tr>
    </thead>
    <tbody>
        @forelse ( $books as $book )
            <tr>
                <th>{{ $book->id }}</th>
                <td>{{ $book->title }}</td>
                <td>
                    @if ($book->author)
                        <span>{{ $book->Author->name }}</span>  
                        <span>{{ $book->Author->last_name }}</span>
                    @else
                        -
                    @endif
                </td>
                        
                <td>
                    <img src="{{ $book->image }}" alt="{{ $book->title }}" width="80">
                </td>
                <td>{{ $book->creation_year }}</td>
                <td>{{ $book->description }}</td>
                <td class="d-flex">
                    <a href=" {{Route( 'admin.books.show', $book->id )}} " class="btn btn-primary mr-3">View</a>
                    <a href=" {{Route( 'admin.books.edit', $book->id )}} " class="btn btn-primary">Edit</a>
                </td>
            </tr>
        @empty
            <h2>Non ci sono dati nella tabella</h2>
        @endforelse


    </tbody>
    </table>
</div>
@endsection
