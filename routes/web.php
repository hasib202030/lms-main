<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.master');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware(['auth:sanctum'])->group(function () {
    // Department route
    Route::resource('departments', DepartmentsController::class);
    
    // Course Route
    Route::resource('courses', CoursesController::class);
    // section Route
    Route::resource('sections', SectionsController::class);
     
          
    });


