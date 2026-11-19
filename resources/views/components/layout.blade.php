@props(['title' => 'Spelshop'])

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <header>
        <h1>Solestore</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/brands">Merken</a>
            <a href="/products">Producten</a>
        </nav>
        <hr>
    </header>

    <main>
        {{ $slot }}
    </main>

    <hr>
    <footer>
        <p>&copy; {{ date('Y') }} Solestore</p>
    </footer>
</body>
</html>