<div>
    <a href="{{ route('animal.read', $animal->id) }}">
        <img src="{{ asset('storage/' . $animal->img) }}" alt="{{ $animal->name }}" height="170px">
    </a>
    <h2>{{ $animal->name }}</h2>
    <p>Espèce: {{ $animal->breed }}</p>
    <p>Age: {{ $animal->age }}</p>
    <p>{{ Str::limit($animal->description, 40)}}</p>
    <h6>Modified: {{ $animal->updated_at}}</h6>
</div>