@extends('layout')

@section('content')
    <h1>Item Details</h1>
    <p><strong>Name:</strong> {{ $item['name'] }}</p>
    <p><strong>Description:</strong> {{ $item['description'] }}</p>
    <a href="{{ route('items.index') }}">Back to List</a>
@endsection
