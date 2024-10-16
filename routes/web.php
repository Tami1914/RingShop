<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('rings', RingController::class);


// Route::get('rings/create', function () {
//     return view('create');
// });

// Route::delete('rings/$ring', [RingController::class, 'destroy']);

// Route::get('rings/{ring}/edit', [RingController::class, 'edit'])->name('rings.edit');

// Route::patch('rings/{ring}', [RingController::class, 'update'])->name('rings.update');