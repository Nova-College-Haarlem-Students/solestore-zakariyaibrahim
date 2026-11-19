<x-layout title="Alle Sneakers">
    <h1>Alle Sneakers</h1>
    <ul>
        @foreach($sneakers as $sneaker)
            <li>
                <a href="/sneakers/{{ $sneaker->id }}">
                    {{ $sneaker->name }} ({{ $sneaker->colorway }})
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>