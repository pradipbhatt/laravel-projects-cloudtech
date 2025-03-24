<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    // This method will show the homepage with data
    public function home()
    {
        $name = "Pradip"; // Example data
        return view('home', compact('name')); // Passing data to the 'welcome' view
    }
    

    // This method will show the example view with data
    public function showData()
    {
        $email = "johndoe@example.com"; // Example data
        return view('example', compact('email')); // Passing data to the 'example' view
    }
}
