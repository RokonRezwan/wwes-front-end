@extends('layouts.app')

@section('content')
    <a href="{{ route('products.index') }}">Product Index</a>
    <a href="{{ route('products.create') }}">Create Product</a>
@endsection
