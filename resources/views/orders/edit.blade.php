@extends('layouts.app')

@section('content')
    <h1>Modifica Ordine</h1>
    <form method="POST" action="{{ route('orders.update', $order->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="sale_date">Data di Vendita:</label>
            <input type="date" name="sale_date" class="form-control" value="{{ $order->sale_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
@endsection
