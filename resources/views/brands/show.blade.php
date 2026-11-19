<x-layout title="{{ $brand->name }}">
    <h1>{{ $brand->name }}</h1>
    <p>Land: {{ $brand->country }}</p>
    <p>Beschrijving: {{ $brand->description }}</p>

    <h2>Sneakers van dit merk:</h2>
    <ul>
        @foreach ($brand->sneakers as $sneaker)
            <li>
                <a href="/sneakers/{{ $sneaker->id }}">{{ $sneaker->name }}</a>
            </li>
        @endforeach
    </ul>

    <p><a href="/brands">Terug naar alle Merken</a></p>
</x-layout>