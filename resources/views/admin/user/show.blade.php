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
                <p class="card-text"> foto: {{ $user->photo }} <br>
                <h5 class="card-title ">Indirizzo: {{ $user->adress }}</h5>
                P.Iva: {{ $user->piva }} <br>
                <p>Mail: {{ $user->email }}</p>
                {{-- <a href="{{ route('pages.show', $user) }}" class="btn btn-primary">Restourant detail</a> --}}
                <a href="{{ route('pages.show', $user) }}" class="btn btn-primary">Restourant details</a>
                {{-- <a href="{{ route('pages.edit', $user) }}" class="btn btn-success">Edit</a> --}}
                {{-- <form action="{{ route('pages.destroy', $user) }}" method="POST" class="d-inline-block animal-destroy"> --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-scripts')
    @vite('resources/js/posts/delete-index-confirmation.js')
@endsection
