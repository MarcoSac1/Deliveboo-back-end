@extends('layouts.app')
@section('page-title')
Showing {{ $user->name }}
@endsection
@section('main-section')
<section class="col-12 mb-4 d-flex flex-wrap justify-content-center text-center ">

    <div class="card m-4" style="width: 40rem;">
        <h3 class="card-header">{{ $user->name}}</h3>
        <div class="m-3">
            <img src="{{ $user->photo }}" class="card-img" alt="{{ $user->name}}">
        </div>
        <div class="card-body">
            <br>
            <h5 class="card-title ">Indirizzo: {{ $user->adress }}</h5>
            P.Iva: {{ $user->piva }} <br>
            <p class="card-text"> Mail: {{ $user->email }}</p>
            <a href="{{ route('pages.index', $user) }}" class="btn btn-primary">Retourn  to home</a>
        </div>
    </div>
</section>
@endsection
@section('additional-scripts')
@vite('resources/js/posts/delete-index-confirmation.js')
@endsection


