@extends('layouts.app')
@section('main-section')
    <div class="container ">
        <div class="row justify-content-center">
            <h1 class="text-center">
                Crea il tuo ristorante
            </h1>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as  $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-6 ">
            <form action="{{ route ('admin.user.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">Nome</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Inserisci il nome" aria-label="Nome" id="name" name="name" value="{{ old('name') }}" required>
                </div>
        </div>
    </div>
@endsection
