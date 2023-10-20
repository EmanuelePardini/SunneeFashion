@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Kg plastic recycled:</strong> {{ $product->recycled_plastic_kg }}</p>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
@endsection
