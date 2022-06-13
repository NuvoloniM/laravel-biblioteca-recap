@extends('layouts.app')

@section('content')
<div class="container">
    <form action=" {{ route('admin.books.update', $book->id) }} " method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
        </div>

        <div class="form-group">
            <label for="author">Autore</label>
            <select name="author_id" id="author">
                <option value="Nassun Autore">Nessun Autore</option>
                {{-- ciclo l'array degli autori  --}}
                @foreach ($authors as $author)
                <option value="{{$author->id}}" @if( old('author_id', $book->author_id) == $author->id) selected @endif 
                    >{{$author->name}} {{$author->last_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input
                type="url"
                class="form-control"
                id="image"
                name="image"
                placeholder="https://via.placeholder.com/640x480.png/00ffcc?text=vero"
                value="{{ old('image', $book->image) }}"
            >
        </div>

        <div class="form-group">
            <label for="creation_year">creation_year</label>
            <input type="text" class="form-control" id="creation_year" name="creation_year" value="{{ old('creation_year', $book->creation_year) }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10">
                {{ old('description', $book->description) }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
</div>
@endsection
