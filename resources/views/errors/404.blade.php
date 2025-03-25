@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
    <div class="text-center py-16">
        <h1 class="text-5xl font-bold text-gray-700">404</h1>
        <p class="text-xl text-gray-500 mt-4">Sorry, the page you are looking for could not be found.</p>
        <a href="{{ url('/') }}" class="text-blue-600 hover:text-blue-700 mt-6 inline-block">Go back to Home</a>
    </div>
@endsection
