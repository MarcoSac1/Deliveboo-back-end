@extends('layouts.app')
@section('main-section')
<div class="row justify-content-center">
    <h1 class=" text-center mb-3">Create a New Dish</h1>
    <div class="col-6">
        <form  action="{{ route('admin.dishes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="photo">Photo URL</label>
                <input type="url" name="photo" id="photo" class="form-control" value="{{ old('photo') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Price (€)</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price') }}" required>
            </div>

            <div class="form-group">
                <label for="visible">Visible</label>
                <select name="visible" id="visible" class="form-control" required>
                    <option value="1" {{ old('visible') == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ old('visible') == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">User</label>
                <select name="user_id" id="user_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create Dish</button>
        </form>
    </div>
</div>
@endsection
