<div>
    <a href="{{ route('animal.read', $animal->id) }}">
        <img src="{{ asset('images/' . $animal->img) }}" alt="{{ $animal->name }}" height="170px">
    </a>
    <h2>{{ $animal->name }}</h2>
    <p>Espèce: {{ $animal->breed }}</p>
    <p>Age: {{ $animal->age }}</p>
    <p id="desc">{{ $animal->description}}</p>
    <!--<h6>Modified: {{ $animal->updated_at}}</h6>-->
    <span>
        <a href="{{ route('animal.delete', $animal->id) }}">Delete</a>
        <a href="{{ route('animal.update', $animal->id) }}">Update</a>
    </span>
</div>