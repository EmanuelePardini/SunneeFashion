@extends('layouts.app')

@section('content')
    <h1>Orders List</h1>
    <a href="{{ route('orders.create') }}" class="btn btn-primary">Create Order</a>
    <table class="table">
        <thead>
            <tr>
                <th>Sell Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->sale_date }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
