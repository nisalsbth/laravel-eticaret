@extends('layouts.default')

@section('content')

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="0.01" name="price" id="price" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@stop
