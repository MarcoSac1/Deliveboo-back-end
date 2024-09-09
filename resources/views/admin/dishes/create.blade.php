@extends('layouts.app')
@section('main-section')
<div>
    <h1 class="text-align-center">Create a New Dish</h1>

    <form action="{{ route('admin.dishes.store') }}" method="POST">
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
            <label for="description">Descriptionsss</label>
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

        <button type="submit" class="btn btn-success mt-3">Create Dish</button>
    </form>
</div>
@endsection
