@extends('layouts.app')
@section('page-title')
Showing {{ $users->name }}
@endsection
@section('main-section')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-3">
            <h2>{{  $users->name }}</h2>
            {{-- @if ( $users->category)
                <h2 class="d-inline-block px-3 rounded" style='background:{{$users->category->color}}'> {{  $users->category->name }}</h2>
            @endif --}}
            <div class="image">
                <img src="{{  $users->photo }}" class="img-fluid" alt="img">
            </div>
            <h4>{{ $users->creation_date}}</h4>
            <p>{{ $users->content}}</p>
            <div class="card-footer">
                <a href="{{ route('pages.index', $users) }}" class="btn btn-primary">Back To Restourant</a>
                {{-- <a href="{{route ('admin.user.index') }}" class="btn btn-primary btn-sm">Return to Restourant list</a> --}}
                {{-- <a href="{{route ('admin.user.edit', $users)}}" class="btn btn-success btn-sm">Edit</a> --}}
                {{-- <form action="{{route ('admin.user.destroy', $users)}}" method="POST" class="d-inline-block form-destroyer" data-post-title='{{$users->name }}'> --}}
                    {{-- @method('delete') --}}
                    {{-- @csrf --}}

                    <input type="submit" class="btn btn-warning btn-sm" value="delete"></input>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('additional-scripts')
    @vite('resources/js/posts/delete-index-confirmation.js')
@endsection
