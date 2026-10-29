<!DOCTYPE html>
<html>
<head>
    <title>Add Book</title>
</head>
<body>
    <h1>Add Book</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('books.store') }}">
        @csrf

        <label>Title</label>
        <input type="text" name="title" value="{{ old('title') }}">
        <br>

        <label>Author</label>
        <input type="text" name="author" value="{{ old('author') }}">
        <br>

        <label>Status</label>
        <select name="status">
            <option value="to-read" @selected(old('status', 'to-read') == 'to-read')>To read</option>
            <option value="reading" @selected(old('status') == 'reading')>Reading</option>
            <option value="finished" @selected(old('status') == 'finished')>Finished</option>
        </select>
        <br>

        <button type="submit">Save Book</button>
    </form>

    <a href="{{ route('books.index') }}">Back to list</a>
</body>
</html>