@extends('layouts.default')

@section('content')

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Ürün Adı</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Ürün Açıklaması</label>
        <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Fiyat</label>
        <input type="text" name="price" id="price" value="{{ $product->price }}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Güncelle</button>
</form>

@endsection
