@extends('layouts.app')
@section('title', 'RefugeConnect - Accueil')
@section('content')
<div>
    <h2>Nos Animaux</h2>
    <div class="animal-card">
        @foreach($animal as $animal)
            @if($loop->index < 3 ) 
                <x-animal :animal="$animal"/>
            @endif
        @endforeach
    </div>
</div>
@endsection