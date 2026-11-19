<x-layout title="SoleStore - Merken">
    <h1>Alle Merken</h1>

    @foreach ($brands as $brand)
        <h2>
            <a href="/brands/{{ $brand->id }}">
                {{ $brand->name }}
            </a>
        </h2>

        <p>{{ $brand->country }}</p>
    @endforeach
</x-layout>