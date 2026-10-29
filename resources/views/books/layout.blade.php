<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reading List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 30px;
            color: #222;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            color: #34495e;
        }

        input, select {
            padding: 10px;
            margin: 6px 0 15px;
            width: 100%;
            box-sizing: border-box;
        }

        button, .btn {
            background: #287a57;
            color: white;
            padding: 10px 14px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
        }

        .delete {
            background: #d94343;
        }

        .message {
            background: #d8f5df;
            padding: 12px;
            margin-bottom: 15px;
        }

        .error {
            color: #c62828;
        }

        .book {
            border: 1px solid #ddd;
            border-radius: 7px;
            padding: 15px;
            margin-top: 15px;
        }

        .actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 12px;
        }

        .filter {
            max-width: 300px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if (session('success'))
            <div class="message">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>