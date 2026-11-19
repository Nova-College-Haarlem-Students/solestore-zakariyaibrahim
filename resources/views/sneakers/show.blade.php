<!DOCTYPE html>
<html>
<head>
    <title>{{ $sneaker->name }}</title>
</head>
<body>
    <h1>{{ $sneaker->name }}</h1>
    <p><strong>Kleur:</strong> {{ $sneaker->colorway }}</p>
    <p><strong>Releasedatum:</strong> {{ $sneaker->release_year }}</p>
    <p><strong>Beschrijving:</strong> {{ $sneaker->description }}</p>
    <p><a href="/sneakers">Terug naar alle sneakers</a></p>
</body>
</html>