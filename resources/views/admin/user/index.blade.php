@extends('layouts.app')
@section('main-section')
<div class="row">
    <div class="col-12 text-center ">
        <h1>Restourant</h1>
    </div>
    <section class="col-12 mb-4 d-flex flex-wrap justify-content-center text-center ">
        @foreach ($users as $user)
        <div class="card m-3" style="width: 18rem;">
            <h3 class="card-header">{{ $user->name}}</h3>
            <img src="{{ $user->photo }}" class="card-img-top" alt="{{ $user->name}}">
            <div class="card-body">
                <br>
                        <h5 class="card-title ">Indirizzo: {{ $user->adress }}</h5>
                        P.Iva: {{ $user->piva }} <br>
                <p class="card-text"> Mail: {{ $user->email }}</p>
                <a href="{{ route('pages.show', $user) }}" class="btn btn-primary">Restourant details</a>
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection
