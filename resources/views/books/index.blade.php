@extends('books.layout')

@section('content')

    <h1>📚 My Reading List</h1>
    <p>Manage your books in one place.</p>

    <a href="{{ route('books.create') }}" class="btn">
        + Add New Book
    </a>

    <h2>My Books</h2>

    <form action="{{ route('books.index') }}" method="GET" class="filter">
        <label>Filter by reading status:</label>

        <select name="status">
            <option value="">All Books</option>
            <option value="to-read" @selected(request('status') === 'to-read')>
                To Read
            </option>
            <option value="reading" @selected(request('status') === 'reading')>
                Reading
            </option>
            <option value="finished" @selected(request('status') === 'finished')>
                Finished
            </option>
        </select>

        <button type="submit">Filter</button>
        <a href="{{ route('books.index') }}" class="btn">Clear</a>
    </form>

    @forelse ($books as $book)
        <div class="book">
            <h3>{{ $book->title }}</h3>

            <p><strong>Author:</strong> {{ $book->author }}</p>
            <p><strong>Genre:</strong> {{ $book->genre }}</p>

            <p>
                <strong>Status:</strong>
                @if ($book->status === 'to-read')
                    To Read
                @elseif ($book->status === 'reading')
                    Reading
                @else
                    Finished
                @endif
            </p>

            <div class="actions">
                <a href="{{ route('books.edit', $book) }}" class="btn">
                    Edit / Change Status
                </a>

                <form action="{{ route('books.destroy', $book) }}"
                      method="POST"
                      onsubmit="return confirm('Are you sure you want to delete this book?');">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="delete">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @empty
        <p>No books found. Click "Add New Book" to get started!</p>
    @endforelse

@endsection