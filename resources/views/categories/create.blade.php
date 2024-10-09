@extends('layouts.app')

@section('content')
    <h2>Add New Category</h2>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Category Name" required>
        <button type="submit">Add Category</button>
    </form>
@endsection