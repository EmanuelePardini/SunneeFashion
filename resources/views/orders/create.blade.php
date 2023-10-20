@extends('layouts.app')

@section('content')
    <h1>Create Order</h1>
    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <div class="form-group">
            <label for="sale_date">Sell Date:</label>
            <input type="date" name="sale_date" class="form-control">
        </div>

        <div class="form-group">
    <label for="product_id">Product:</label>
    <select name="product_id" class="form-control">
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="text" name="quantity" class="form-control">
</div>

        <button type="submit" class="btn btn-primary">Create Order</button>
    </form>
@endsection
