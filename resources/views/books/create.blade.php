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

        <label>Book Title:</label>
        <input type="text" name="title"
               value="{{ old('title') }}"
               placeholder="Enter book title" required>

        <label>Author:</label>
        <input type="text" name="author"
               value="{{ old('author') }}"
               placeholder="Enter author name" required>

        <label>Genre:</label>
        <input type="text" name="genre"
               value="{{ old('genre') }}"
               placeholder="e.g. Fiction, Romance, Science" required>

        <label>Reading Status:</label>
        <select name="status" required>
            <option value="to-read" @selected(old('status', 'to-read') === 'to-read')>
                To Read
            </option>
            <option value="reading" @selected(old('status') === 'reading')>
                Reading
            </option>
            <option value="finished" @selected(old('status') === 'finished')>
                Finished
            </option>
        </select>

        <button type="submit">Save Book</button>

        <a href="{{ route('books.index') }}" class="btn">
            Back to List
        </a>
    </form>

@endsection