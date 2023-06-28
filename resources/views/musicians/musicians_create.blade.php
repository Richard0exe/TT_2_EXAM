<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body >
    <h1>New Musician</h1>

    <form action="{{ route('musicians.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="stage_name">Stage Name:</label>
            <input type="text" name="stage_name" id="stage_name" required>
        </div>

        <div>
            <label for="real_name">Real Name:</label>
            <input type="text" name="real_name" id="real_name" required>
        </div>

        <div>
            <label for="muisc_label">Music label:</label>
            <input type="text" name="music_label" id="music_label" required>
        </div>

        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" required>
        </div>

        <button type="submit">Add Musician</button>
    </form>
</body>
</html>