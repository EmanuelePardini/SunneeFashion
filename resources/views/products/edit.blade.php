@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="recycled_plastic_kg">Kg plastic recycled:</label>
            <input type="text" name="recycled_plastic_kg" class="form-control" value="{{ $product->recycled_plastic_kg }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
