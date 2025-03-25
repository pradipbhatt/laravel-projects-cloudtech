@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8">Welcome to the Contact Us Page</h1>
        <p class="text-lg text-gray-700 mb-4">Feel free to reach out to us with any questions you may have!</p>

        <form action="#" method="POST" class="space-y-4">
            @csrf <!-- CSRF Token for security -->

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required>
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Your Message</label>
                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg" required></textarea>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">Submit</button>
        </form>
    </div>
@endsection
