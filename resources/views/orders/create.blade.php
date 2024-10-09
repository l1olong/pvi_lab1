@extends('layouts.app')

@section('content')
    <h2>Add New Order</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input type="text" name="customer_name" placeholder="Customer Name" required>
        <button type="submit">Add Order</button>
    </form>
@endsection
