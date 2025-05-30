<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Blog</title>
    <style>
        body { font-family: sans-serif; padding: 0; margin: 0; }
        header, footer { background: #333; color: #fff; padding: 10px; text-align: center; }
        nav { background: #eee; padding: 10px; text-align: center; }
        nav a { margin: 0 10px; text-decoration: none; color: #333; }
        main { padding: 20px; }
    </style>
</head>
<body>
    <header>
        <h1>My Layouts</h1>
    </header>

    <nav>
        <a href="http://localhost/laravel12/public/home">Home</a>
        <a href="http://localhost/laravel12/public/about">About</a>
        <a href="http://localhost/laravel12/public/blog">Blog</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        © 2025 My Layouts
    </footer>
</body>

