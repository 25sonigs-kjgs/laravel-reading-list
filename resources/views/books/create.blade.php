@extends('books.layout')

@section('content')

    <h1>Add a New Book</h1>

    @if ($errors->any())
        <div class="error">
            <p>Please correct these errors:</p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.store') }}" method="POST">
        @csrf

        <input
    type="text"
    name="title"
    placeholder="e.g. The Great Gatsby"
    value="{{ old('title') }}"
>

<input
    type="text"
    name="author"
    placeholder="e.g. F. Scott Fitzgerald"
    value="{{ old('author') }}"
>

<input
    type="text"
    name="genre"
    placeholder="e.g. Fiction, Mystery, Romance"
    value="{{ old('genre') }}"
>

        <label>Reading Status:</label>
       <select name="status">
    <option value="to-read" {{ old('status', 'to-read') == 'to-read' ? 'selected' : '' }}>To Read</option>
    <option value="reading" {{ old('status') == 'reading' ? 'selected' : '' }}>Reading</option>
    <option value="finished" {{ old('status') == 'finished' ? 'selected' : '' }}>Finished</option>
</select>

<div>
    <label for="notes">Notes</label>
    <textarea
        id="notes"
        name="notes"
        placeholder="Write a few notes about this book..."
    >{{ old('notes') }}</textarea>
</div>

        <button type="submit">Save Book</button>

        <a href="{{ route('books.index') }}" class="btn">
            Back to List
        </a>
    </form>

@endsection