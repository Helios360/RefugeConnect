@extends('layouts.app')
@section('title', 'RefugeConnect - Accueil')
@section('content')
<div>
    <h2>Nos Animaux</h2>
    <div class="animal-card">
        @foreach($animal as $animal)
            <x-animal :animal="$animal"/>
        @endforeach
    </div>
</div>
@endsection