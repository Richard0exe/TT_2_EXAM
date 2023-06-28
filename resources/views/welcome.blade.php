<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Homepage</title>

    <link href="{{ asset('css/welcome_blade.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body class="antialiased">
    <div class="navbar">
        <div class="left-section">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="buttons">
                <a href="songs" class="button">All Songs</a>
                <a href="/musicians" class="button">Artists</a>
            </div>
        </div>
        <div class="right-section">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="language-toggle">
                <a href="#" class="text-sm">EN</a>
                <a href="#" class="text-sm">LV</a>
            </div>
        </div>
    </div>
    <div class="container">
        <h2>Newest Song</h2>
        <table class="song-table">
            <tr>
                <td>
                    <div class="song-item">
                        <img src="{{ asset('images/donda.jpg') }}" alt="Song 1">
                        <div class="song-details">
                            <span class="song-title">Song 1</span>
                            <span class="song-artist">Artist 1</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="song-item">
                        <img src="{{ asset('images/donda.jpg') }}" alt="Song 2">
                        <div class="song-details">
                            <span class="song-title">Song 2</span>
                            <span class="song-artist">Artist 2</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="song-item">
                        <img src="{{ asset('images/donda.jpg') }}" alt="Song 3">
                        <div class="song-details">
                            <span class="song-title">Song 3</span>
                            <span class="song-artist">Artist 3</span>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="song-item">
                        <img src="{{ asset('images/donda.jpg') }}" alt="Song 4">
                        <div class="song-details">
                            <span class="song-title">Song 4</span>
                            <span class="song-artist">Artist 4</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="song-item">
                        <img src="{{ asset('images/donda.jpg') }}" alt="Song 5">
                        <div class="song-details">
                            <span class="song-title">Song 5</span>
                            <span class="song-artist">Artist 5</span>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="song-item">
                        <img src="{{ asset('images/donda.jpg') }}" alt="Song 6">
                        <div class="song-details">
                            <span class="song-title">Song 6</span>
                            <span class="song-artist">Artist 6</span>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
