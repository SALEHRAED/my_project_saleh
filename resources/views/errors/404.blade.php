@extends('layouts.app')

@section('content')

<div class="403">
    <div class="my-12 text-center">
        <h1 class="text-5xl font-bold">404</h1>
        <p class="font-bold text-gray-600 mb-6">Not Found.</p>
        <a href="{{ url('/') }}" class="text-sm text-gray-600 border border-gray-400 px-4 py-2 rounded">Back to Home.</a>
    </div>
</div>

@endsection
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
