@extends('layouts.app')
@section('page-title')
Showing {{ $user->name }}
@endsection
@section('main-section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-3">
            <h1 class="card-header">{{ $user->username}}</h1>
            <div class="card-body">
                <p class="card-text"> foto: {{ $user->photo }} </p>
                <h5 class="card-title ">Indirizzo: {{ $user->adress }}</h5>
                <p>P.Iva: {{ $user->piva }}</p>
                <p>Mail: {{ $user->email }}</p>
                <a href="{{ route('pages.index', $user) }}" class="btn btn-primary">Return to home</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-scripts')
    @vite('resources/js/posts/delete-index-confirmation.js')
@endsection
