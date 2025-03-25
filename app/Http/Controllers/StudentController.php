<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Import the Student model

class StudentController extends Controller
{
    // Show the student form
    public function showForm()
    {
        return view('student.form');
    }

    // Handle form submission
    public function handleForm(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'age' => 'required|integer|min:18|max:100',
            'message' => 'required|string|max:1000',
        ]);

        // Store the form data into the students table
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'message' => $request->message,
        ]);

        // Return success message
        return back()->with('success', 'Form submitted successfully!');
    }
}
