<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title') - My Favorite Places</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<nav class="nav">
    <div class="nav-wrapper">
        <div class="container">
            <a href="/places" class="brand-logo">My Favorite Places</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/places">Places List</a></li>
                <li><a href="/places/create">Create</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>