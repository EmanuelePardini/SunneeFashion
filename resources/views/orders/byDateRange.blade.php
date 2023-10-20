@extends('layouts.app')
@section('content')
    <h1>Orders by Date Range</h1>

    @if (isset($orders) && $orders->count() > 0)
        <h2>Filtered Orders:</h2>
        <ul>
            @foreach ($orders as $order)
                <li>
                    Order ID: {{ $order->id }}
                    <br>
                    Sale Date: {{ $order->sale_date }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No orders found for the specified date range.</p>
    @endif

    <a href="{{ route('orders.index') }}" class="btn btn-primary">Back to Orders</a>
</div>

@endsection
