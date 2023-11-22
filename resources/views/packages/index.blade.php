@extends('layout')

@section('title', 'Packages')

@section('content')
    <div class="container">
        <h1>Liste des packages</h1>
        <ul>
            @foreach ($packages as $package)
                <li><a href="{{ route('packages.show', $package['slug']) }}">{{ $package['title'] }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
