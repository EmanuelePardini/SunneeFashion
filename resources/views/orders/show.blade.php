@extends('layouts.app')

@section('content')
    <h1>Order Details</h1>
    <h2>Order Date:</h2>
    <p>{{ $order->sale_date }}</p>

    <h2>Products:</h2>
        <ul>
            @foreach ($order->products as $product)
            
                <li>
                    <strong>Product ID:</strong> {{ $product->id }}
                    <br>
                    <strong>Product Name:</strong> {{ $product->name }}
                    <br>
                    <strong>Quantity:</strong> {{ $product->pivot->quantity }}
                </li>
            @endforeach
        </ul>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
@endsection
