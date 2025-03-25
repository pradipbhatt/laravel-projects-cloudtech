<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\StudentController;

// Default Route (home route)
Route::get('/home', function () {
    return view('home');  // Ensure that the 'home' view exists
})->name('home');

// Route to show data
Route::get('/show-data', [ExampleController::class, 'showData']);

// Route to contact page, with a name for the route
Route::get('/contact', [ExampleController::class, 'showContactPage'])->name('contact');

// Route to about page
Route::get('/about', [ExampleController::class, 'showAboutPage'])->name('about');

// Route to show the form
Route::get('/student-form', [StudentController::class, 'showForm'])->name('student.form');

// Route to handle form submission
Route::post('/submit-student-form', [StudentController::class, 'handleForm'])->name('student.submit');

// Catch-all route to handle undefined routes and show a 404 page
Route::fallback(function () {
    return response()->view('errors.404', [], 404);  // Show the custom 404 page if route is not found
});
