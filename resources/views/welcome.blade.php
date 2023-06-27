<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/welcome_blade.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body class="antialiased">
    <div class="navbar">
        <div class="left-section">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="buttons">
                <a href="#" class="button">All Songs</a>
                <a href="#" class="button">Artists</a>
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
                <a href="" class="text-sm">EN</a>
                <a href="" class="text-sm">LV</a>
            </div>
        </div>
    </div>
</body>
</html>
