<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Orders</h1>
    <ul>
        @foreach ($orders as $order)
            <li>
                {{ $order->customer_name }} - {{ $order->created_at }}
                <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('orders.create') }}">Create New Order</a>
</body>
</html>
