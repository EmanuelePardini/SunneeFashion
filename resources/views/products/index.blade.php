@extends('layouts.app')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">View Product</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Kg plastic recycled</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->recycled_plastic_kg }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                  </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
