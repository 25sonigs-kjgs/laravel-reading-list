<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')

        <label>Title</label>
        <input type="text" name="title" value="{{ old('title', $book->title) }}">
        <br>

        <label>Author</label>
        <input type="text" name="author" value="{{ old('author', $book->author) }}">
        <br>

        <label>Status</label>
        <select name="status">
            <option value="to-read" @selected(old('status', $book->status) == 'to-read')>To read</option>
            <option value="reading" @selected(old('status', $book->status) == 'reading')>Reading</option>
            <option value="finished" @selected(old('status', $book->status) == 'finished')>Finished</option>
        </select>
        <br>

        <button type="submit">Update Book</button>
    </form>
</body>
</html>