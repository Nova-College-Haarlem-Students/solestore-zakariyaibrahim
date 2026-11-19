<!DOCTYPE html>
<html>
<head>
    <title>SoleStore - Brands</title>
</head>
<body>
    <h1>All Brands</h1>

    @foreach ($brands as $brand)
        <h2>
            <a href="/brands/{{ $brand->id }}">
                {{ $brand->name }}
            </a>
        </h2>

        <p>{{ $brand->country }}</p>
    @endforeach

</body>
</html>