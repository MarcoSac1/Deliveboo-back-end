@extends('layouts.app')
@section('main-section')
<div>
    <h1>Restourant</h1>
    <section class=" text-center px-3">
            <div class="card col-4 mb-3 d-flex">
                @foreach ($users as $user)
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
                @endforeach
            </div>
        </section>
</div>
@endsection
