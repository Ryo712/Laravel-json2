@extends('layout')

@section('content')
    <h1>Create New Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <button type="submit">Save</button>
    </form>
    <a href="{{ route('items.index') }}">Back to List</a>
@endsection
