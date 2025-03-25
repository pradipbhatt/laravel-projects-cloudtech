@extends('layouts.app')

@section('title', 'Student Form')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8">Student Form</h1>

        <!-- Display success message -->
        @if(session('success'))
            <div class="bg-green-500 text-white text-center p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form for student details -->
        <form action="{{ route('student.submit') }}" method="POST" class="space-y-4">
            @csrf <!-- CSRF Token for security -->

            <!-- Name field -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email field -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Age field -->
            <div>
                <label for="age" class="block text-sm font-medium text-gray-700">Your Age</label>
                <input type="number" id="age" name="age" class="w-full px-4 py-2 border border-gray-300 rounded-lg" value="{{ old('age') }}" required>
                @error('age')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Message field -->
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">Submit</button>
        </form>
    </div>
@endsection
