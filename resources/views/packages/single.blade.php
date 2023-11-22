@extends('layout')

@section('content')
    <h1>Package Details</h1>
    @if ($package)
        <h2>{{ $package['title'] }}</h2>
        <p>ID: {{ $package['id'] }}</p>
        <p>Slug: {{ $package['slug'] }}</p>
        <!-- Add more details about the package here -->
    @else
        <p>Package not found.</p>
    @endif
    <a href="{{ route('packages.index') }}">Back to Package List</a>
@endsection
