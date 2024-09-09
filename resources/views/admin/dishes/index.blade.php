@extends('layouts.app')
@section('main-section')
<div>
    <h1 class="text-align-center">Dishes</h1>
    <section class="cards d-flex flex-wrap" style="width: calc(100 / 3);">
    @foreach ($dishes as $dish )
        <div class="card" style="width: 18rem;">
            <img class=" immagine w-100 align-self-center" src="{{ $dish->photo }}" alt="{{ $dish->name }}">
                <div class="card-body">
                <h5 class="card-title">{{ $dish->name }}</h5>
                <p class="card-text"><p>{{ $dish->description }}</p></p>
                <p>{{ $dish->price }}</p>
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection
