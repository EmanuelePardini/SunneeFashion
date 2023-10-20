@extends('layouts.app')

@section('content')
    <h1>Welcome to SunneeFashion</h1>
    <p>Select one of the following options:</p>

    <h2>Orders</h2>
    <ul>
        <li><a href="{{ route('orders.index') }}">View Orders</a></li>
        <li><a href="{{ route('orders.create') }}">Create a New Order</a></li>
        <li><a href="{{ route('orders.edit', ['id' => 1]) }}">Update an Order</a></li>
        <li><a href="{{ route('orders.show', ['id' => 1]) }}">View Order by ID</a></li>
        <li><a href="{{ route('orders.showByDateRange', ['startDate' => '2023-01-01', 'endDate' => '2023-12-31']) }}">View Orders by Date Range</a></li>
        <li><a href="{{ route('orders.showByProduct', ['productId' => 1]) }}">View Orders by Product</a></li>
        <li><a href="{{ route('orders.destroy', ['id' => 1]) }}">Delete an Order</a></li>
    </ul>

    <h2>Products</h2>
    <ul>
        <li><a href="{{ route('products.index') }}">View Products</a></li>
        <li><a href="{{ route('products.totalRecycledPlastic') }}">Total Recycled Plastic</a></li>
        <li><a href="{{ route('products.create') }}">Create a New Product</a></li>
        <li><a href="{{ route('products.edit', ['id' => 1]) }}">Update a Product</a></li>
        <li><a href="{{ route('products.show', ['id' => 1]) }}">View Product by ID</a></li>
        <li><a href="{{ route('products.destroy', ['id' => 1]) }}">Delete a Product</a></li>
    </ul>
    @endsection
