@extends('layouts.app')
@section('main-section')
    <div class="container ">
        <div class="row justify-content-center">
            <h1 class="text-center">
                Crea il tuo ristorante
            </h1>
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
            <div class="col-6 px-3">
                <form action="{{ route ('pages.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nome</label>
                        <input class="form-control form-control-sm mb-2" type="text" placeholder="Inserisci il nome" aria-label="Nome" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input class="form-control form-control-sm mb-2" type="email" placeholder="email" aria-label="email" id="specie" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="mb-3">
                        <label for="Password">Password</label>
                        <input class="form-control form-control-sm mb-2" type="password" placeholder="Password" aria-label="Password" id="password" name="password" value="{{ old('password') }}">
                    </div>

                    <div class="mb-3">
                        <label for="Photo">Photo</label>
                        <input class="form-control form-control-sm mb-2" type="text" placeholder="Photo" aria-label="Photo" id="photo" name="photo" value="{{ old('photo') }}">
                    </div>

                    <div class="mb-3">
                        <label for="Piva">Piva</label>
                        <input class="form-control form-control-sm mb-2" type="number" placeholder="Piva" aria-label="piva" id="piva" name="piva" value="{{ old('piva') }}">
                    </div>

                    <div class="mb-3">
                        <label for="Adress">Adress</label>
                        <input class="form-control form-control-sm mb-2" type="text" placeholder="Adress" aria-label="Adress" id="adress" name="adress" value="{{ old('adress') }}">
                    </div>

                    <div class="mb-3 d-flex justify-content-between py-2 ">
                        <input type="reset" value="Reset fields" class="btn btn-warning">
                        <input type="submit" value="New User" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
