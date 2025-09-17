<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 2.1 Route 4 Verbs

Route::get('/test-submit', function () {
    return view('test-submit');
});

Route::post('/submit', function () {
    return "Form submitted";
});

Route::put('/update', function () {
    return "Update action performed";
});

Route::delete('/remove', function () {
    return "Delete action performed";
});

// 2.2 Route Groups
// admin prefix => view student page, view lecture page, view employee page
Route::prefix('admin')->group(function () {
    Route::get('/student', function () {
        return view('admin.student');
    });

    Route::get('/lecture', function () {
        return view('admin.lecture');
    });

    Route::get('/employee', function () {
        return view('admin.employee');
    });
});

// 2.3 Route Matching
Route::match(['get', 'post', 'delete'], '/feedback', function (Request $request) {
    if ($request->isMethod('post')) {
        return "Feedback submitted";
    }
    if ($request->isMethod('delete')) {
        return "Feedback deleted";
    }
    return view('feedback');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/submit-contact', function (Request $request) {
    $name = $request->input('name');
    if (!$name) {
        return "Name is required!";
    }
    return "Thank you, $name, for contacting us!";
});

// 2.5 Passing data to views
Route::get('/about', function () {
    return view('about', ['name' => 'John Doe']);
});

Route::get('/users', function () {
    $users = [
        ['name' => 'Alice', 'age' => 30, 'email' => 'alice@example.com'],
        ['name' => 'Bob', 'age' => 25, 'email' => 'bob@example.com'],
        ['name' => 'Charlie', 'age' => 35, 'email' => 'charlie@example.com'],
    ];
    return view('users', ['users' => $users]);
});

// 2.6 Route Parameters
Route::get('/profile/{username}', function ($username) {
    return view('profile', ['name' => $username]);
});

// 2.7 Route Fallback
Route::fallback(function () {
    return view('404');
});
