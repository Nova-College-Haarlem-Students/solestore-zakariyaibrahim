<x-layout title="{{ $sneaker->name }}">
    <h1>{{ $sneaker->name }}</h1>
    <p><strong>Merk:</strong> <a href="/brands/{{ $sneaker->brand->id }}">{{ $sneaker->brand->name }}</a></p>
    <p><strong>Kleur:</strong> {{ $sneaker->colorway }}</p>
    <p><strong>Releasedatum:</strong> {{ $sneaker->release_year }}</p>
    <p><strong>Beschrijving:</strong> {{ $sneaker->description }}</p>
    <p><a href="/sneakers">Terug naar alle sneakers</a></p>
    <p><strong>Huidige Prijs:</strong> 
    @if($sneaker->currentPrice())
        € {{ number_format($sneaker->currentPrice()->price / 100, 2, ',', '.') }}
    @else
        Geen prijs beschikbaar
    @endif
</p>
</x-layout>