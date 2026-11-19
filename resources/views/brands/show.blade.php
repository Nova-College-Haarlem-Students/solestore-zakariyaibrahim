<!DOCTYPE html>
<html>
<head>
    <title>{{ $brand->name }}</title>
</head>
<body>
    <h1>{{ $brand->name }}</h1>

    <p>Country: {{ $brand->country }}</p>
    <p>Description: {{ $brand->description }}</p>

    <a href="/brands">Back to brands</a>
</body>
</html>