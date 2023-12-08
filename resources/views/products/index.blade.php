@extends('layouts.default')

@section('content')

<h1>Ürünler</h1>

<div class="text-right mb-3">
    <a href="{{ route('products.create') }}" class="btn btn-primary">Ürün Ekle</a>
</div>

<div class="mb-3">
    <form action="{{ route('products.index') }}" method="GET" class="form-inline">
        <div class="form-group mr-2">
            <input type="text" name="search" class="form-control" placeholder="Ürün Ara" value="{{ request('search') }}">
        </div>
        <button type="submit" class="btn btn-info">Ara</button>
    </form>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Ürün Adı</th>
            <th>Ürün Açıklaması</th>
            <th>Fiyat</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }} TL</td>
                <td>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sil</button>
                    </form>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Düzenle</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
