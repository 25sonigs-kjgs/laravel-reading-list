<!DOCTYPE html>
<html>
<head>
    <title>Reading List</title>
</head>
<body>
    <h1>My Reading List</h1>
    <p>
    <a href="{{ route('books.index') }}">All</a> |
    <a href="{{ route('books.index', ['status' => 'to-read']) }}">To read</a> |
    <a href="{{ route('books.index', ['status' => 'reading']) }}">Reading</a> |
    <a href="{{ route('books.index', ['status' => 'finished']) }}">Finished</a>
</p>
    <a href="{{ route('books.create') }}">Add Book</a>

    @if ($books->isEmpty())
        <p>No books yet.</p>
    @else
        @foreach ($books as $book)
            <div>
                <h3>{{ $book->title }}</h3>
                <p>Author: {{ $book->author }}</p>
                <p>Status: {{ $book->status }}</p>
                <a href="{{ route('books.edit', $book) }}">Edit</a>
                <form method="POST" action="{{ route('books.destroy', $book) }}" onsubmit="return confirm('Are you sure?')">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
            </div>
        @endforeach
    @endif
</body>
</html>