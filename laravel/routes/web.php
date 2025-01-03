<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function () {
//     Route::get('/jobs', 'index');
    
//     Route::get('/jobs/create', 'create');
    
//     // Route::get('/jobs/{job:id}')
//     Route::get('/jobs/{job}', 'show');
    
//     Route::get('/jobs/{job}/edit', 'edit');
    
//     Route::post('/jobs', 'store');
    
//     Route::patch('/jobs/{job}', 'update');
    
//     Route::delete('/jobs/{job}', 'delete');
// });

// Is the same to the previous one
Route::resource('jobs', JobController::class, [
    // 'only' => [],
    // 'except' => ['edit'],
]);
