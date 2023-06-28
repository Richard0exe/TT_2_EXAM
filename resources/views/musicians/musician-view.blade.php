<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artists</title>
    <link href="{{ asset('css/welcome_blade.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
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
                <a href='songs' class="button">{{__('msg.All Songs')}}</a>
                <a href="{{ route('musicians.index') }}" class="button">{{__('msg.Artists')}}</a>
            </div>
        </div>
        <div class="right-section">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm">{{__('msg.Dashboard')}}</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm">{{__('msg.Log in')}}</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm">{{__('msg.Register')}}</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="language-toggle">
                <a href="language/en" class="text-sm">EN</a>
                <a href="language/lv" class="text-sm">LV</a>
            </div>
        </div>
    </div>
    <div class="list">
    <h1 class="title">{{__('msg.Artists List')}}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @auth
    @endauth

    <ul class="musician-list list-group">
        @foreach ($musicians as $musician)
            <li class="musician-item list-group-item d-flex align-items-center">
                <img src="{{ asset(str_replace('public/', 'storage/', $musician->image_path)) }}" alt="Musician Image" class="mr-3">
                <div class="musician-info">
                    <h5 class="mb-1">{{ $musician->stage_name }}</h5>
                    <p class="mb-1">{{ $musician->real_name }}</p>
                    <p class="mb-0">{{ $musician->music_label }}</p>
                </div>
                @auth
               
                @endauth
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>
