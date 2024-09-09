@extends('layouts.app')
@section('main-section')
<div class="row">
    <div class="col-12 text-center ">
        <h1>Restourant</h1>
    </div>
    <section class="col-12 mb-4 d-flex flex-wrap justify-content-center text-center ">
            <div class="card mb-4 d-flex">
                @foreach ($users as $user)
                    <h1 class="card-header">{{ $user->name}}</h1>
                    <div class="card-body pb-4">
                        <p class="card-text"> foto: {{ $user->photo }} <br>
                        <h5 class="card-title ">Indirizzo: {{ $user->adress }}</h5>
                        P.Iva: {{ $user->piva }} <br>
                        <p>Mail: {{ $user->email }}</p>
                        {{-- <a href="{{ route('pages.show', $user) }}" class="btn btn-primary">Restourant detail</a> --}}
                        {{-- <a href="{{ route('pages.edit', $user) }}" class="btn btn-success">Edit</a> --}}
                        {{-- <form action="{{ route('pages.destroy', $user) }}" method="POST" class="d-inline-block animal-destroy"> --}}
                    </div>
                    <div class="card-body">
                        <a href="{{ route('pages.show', $user) }}" class="btn btn-primary">Restourant details</a>
                    </div>
                @endforeach
            </div>
    </section>
</div>
@endsection
