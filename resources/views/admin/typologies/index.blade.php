@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center my-4">Tipologies</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($typologies as $typology)
                <tr>
                    <td>{{ $typology->id }}</td>
                    <td>{{ $typology->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
