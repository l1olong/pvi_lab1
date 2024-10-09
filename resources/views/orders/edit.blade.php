@extends('layouts.app')

@section('content')
    <h2>Edit Order</h2>
    <form action="{{ route('orders.update', $order->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="customer_name" value="{{ $order->customer_name }}" required>
        <button type="submit">Update Order</button>
    </form>
@endsection
