@extends('layouts.app')
@section('title', 'RefugeConnect - Accueil')
@section('content')
<div>
    <h2>NOS ANIMAUX</h2>
    <div class="animal-card">
        @foreach($animals as $animal)
            <x-animal :animal="$animal"/>
        @endforeach
    </div>
</div>
@endsection