<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Musician</title>
    <link href="{{ asset('css/musician.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome_blade.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="antialiased">
    <div class="container">
        <h1>Edit Musician</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('musicians.update', $musician->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="stage_name">Stage Name</label>
                <input type="text" name="stage_name" id="stage_name" value="{{ $musician->stage_name }}" required>
            </div>

            <div>
                <label for="real_name">Real Name</label>
                <input type="text" name="real_name" id="real_name" value="{{ $musician->real_name }}" required>
            </div>

            <div>
                <label for="music_label">Music Label</label>
                <input type="text" name="music_label" id="music_label" value="{{ $musician->music_label }}" required>
            </div>

            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
