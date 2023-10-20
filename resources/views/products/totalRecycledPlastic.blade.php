@extends('layouts.app')

@section('content')
    <h1>Total Recycled Plastic</h1>
    <p>Total Recycled Plastic (in kg): {{ $totalRecycledPlastic }}</p>

    <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Products</a>
</div>
@endsection
