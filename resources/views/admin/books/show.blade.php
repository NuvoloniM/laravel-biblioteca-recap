@extends('layouts.app')

@section('content')
<div class="container">

    @if ( session('message') )
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="card text-center">
        <div class="card-header">
            <h2>
                {{ $book->title }}
            </h2>
            <h4>
                @if ($book->Author)    
                    {{$book->Author->name}} {{$book->Author->last_name}}
                @else
                    Nessun Autore
                @endif
            </h4>
        </div>
        <div class="card-body">
            <img src="{{ $book->image }}" alt="{{ $book->title }}">
            <p class="card-text">{{ $book->description }}</p>
            <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
