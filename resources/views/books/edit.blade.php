@extends('books.layout')

@section('content')

    <h1>Edit Book</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Book Title:</label>
        <input type="text" name="title"
               value="{{ old('title', $book->title) }}" required>

        <label>Author:</label>
        <input type="text" name="author"
               value="{{ old('author', $book->author) }}" required>

        <label>Genre:</label>
        <input type="text" name="genre"
               value="{{ old('genre', $book->genre) }}" required>

        <label>Reading Status:</label>
        <select name="status" required>
            <option value="to-read"
                @selected(old('status', $book->status) === 'to-read')>
                To Read
            </option>

            <option value="reading"
                @selected(old('status', $book->status) === 'reading')>
                Reading
            </option>

            <option value="finished"
                @selected(old('status', $book->status) === 'finished')>
                Finished
            </option>
        </select>

        <button type="submit">Update Book</button>

        <a href="{{ route('books.index') }}" class="btn">
            Cancel
        </a>
    </form>

@endsection