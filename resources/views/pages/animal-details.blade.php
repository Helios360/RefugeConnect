@extends('layouts.app')
@section('title', 'RefugeConnect - Accueil')
@section('content')
<h2>{{ $animal->name }}</h2>
<div class="details">
    <img src="{{ asset('images/' . $animal->img) }}" height="200px">
    <div>
        <p>Espèce: {{ $animal->breed }}</p>
        <p>Age: {{ $animal->age }}</p>
        <p>{{ $animal->description}}</p>
        <!--<h6>Modified: {{ $animal->updated_at}}</h6>-->
    </div>
</div>
@endsection