<!DOCTYPE html>
<html>
<head>
    <title>{{ $brand->name }}</title>
</head>
<body>
    <h1>{{ $brand->name }}</h1>

    <p>Land: {{ $brand->country }}</p>
    <p>Beschrijving: {{ $brand->description }}</p>

    <a href="/brands">Terug naar alle Merken</a>
</body>
</html>