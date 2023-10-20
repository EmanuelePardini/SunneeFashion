@extends('layouts.app')

@section('content')
    <h1>Create product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="recycled_plastic_kg">Kg plastic Recycled:</label>
            <input type="text" name="recycled_plastic_kg" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save Product</button>
    </form>
@endsection
