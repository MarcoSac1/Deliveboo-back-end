@extends('layouts.app')
@section('main-section')
<div class="row">
    <div class="col-12  text-center">
        <h1 class="mb-4 text-align-center">{{ $dish->name }}</h1>
    </div>
    <div class="row justify-content-center">
        <div class="card " style="width: 28rem;">
            <img class="immagine m-3 rounded-2 w-100 align-self-center" src="{{ $dish->photo }}" alt="{{ $dish->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $dish->name }}</h5>
                <p class="card-text">{{ $dish->description }}</p>
                <p>{{ $dish->price }} €</p>
                <p><strong>Visible:</strong> {{ $dish->visible ? 'Yes' : 'No' }}</p>

                <a href="{{ route('admin.dishes.edit', $dish->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('admin.dishes.index') }}" class="btn btn-secondary">Go Back</a>
                <form action="{{ route('admin.dishes.destroy', $dish->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this dish?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
</div>
