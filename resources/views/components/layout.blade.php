@props(['title' => 'SoleStore'])

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>SoleStore</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/sneakers">Sneakers</a>
            <a href="/brands">Merken</a>
        </nav>
        <hr>
    </header>

    <main>
        {{ $slot }}
    </main>

    <hr>
    <footer>
        <p>&copy; {{ date('Y') }} SoleStore</p>
    </footer>
</body>
</html>