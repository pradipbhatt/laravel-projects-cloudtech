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
            'email' => 'required|email|max:255|unique:students,email',  // Add unique validation for email
            'age' => 'required|integer|min:18|max:100',
            'message' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Add validation for image
        ]);
    
        // Check if a student with the same email already exists
        $existingStudent = Student::where('email', $request->email)->first();
    
        if ($existingStudent) {
            return back()->withErrors(['email' => 'This email is already registered.']);
        }
    
        // Handle the image upload if an image is provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Store the image in the 'public/images' directory and get the file path
            $imagePath = $request->file('image')->store('images', 'public');
        }
    
        // Store the form data into the students table
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'message' => $request->message,
            'image' => $imagePath, // Save the image path in the database
        ]);
    
        // Return success message
        return back()->with('success', 'Form submitted successfully!');
    }
    
}
