<?php

use App\http\Livewire\Members;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth:sanctum','verified']], function() {
    Route::get('/dashboard',function(){
        return view('dashboard');
    })->name('dashboard');
    Route::get('member',members::class)->name('member');
});