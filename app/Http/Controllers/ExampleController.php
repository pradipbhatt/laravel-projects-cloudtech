<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // This method will show the example view with data
    public function showData()
    {
        $email = "johndoe@example.com"; // Example data
        return view('example', compact('email')); // Passing data to the 'example' view
    }

    // Method to show the contact page view
    public function showContactPage()
    {
        return view('contact'); // Rendering the contact page
    }

    // Method to show the home page view
    public function home()
    {
        return view('home'); // Rendering the home page
    }

    public function showAboutPage()
{
    return view('about'); // Make sure this file exists in resources/views/about.blade.php
}

}
