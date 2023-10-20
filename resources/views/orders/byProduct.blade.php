@extends('layouts.app')

@section('content')
    <h1>Orders by Product</h1>
    <ul>
        @foreach ($orders as $order)
            <li>Order ID: {{ $order->id }}, Sale Date: {{ $order->sale_date }}</li>
        @endforeach
    </ul>
@endsection
