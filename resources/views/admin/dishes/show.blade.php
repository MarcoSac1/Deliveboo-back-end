@extends('layouts.app')
@section('main-section')
<div>
    <h1 class="text-align-center">{{ $dish->name }}</h1>

    <div class="card" style="width: 18rem;">
        <img class="immagine w-100 align-self-center" src="{{ $dish->photo }}" alt="{{ $dish->name }}">
        <div class="card-body">
            <h5 class="card-title">{{ $dish->name }}</h5>
            <p class="card-text">{{ $dish->description }}</p>
            <p>{{ $dish->price }} €</p>
            <p><strong>Visible:</strong> {{ $dish->visible ? 'Yes' : 'No' }}</p>

            <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('admin.dishes.index') }}" class="btn btn-secondary mt-3">Go Back</a>
            <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this dish?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
