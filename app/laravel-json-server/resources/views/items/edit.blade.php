@extends('layout')

@section('content')
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $item['name'] }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description">{{ $item['description'] }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('items.index') }}">Back to List</a>
@endsection
