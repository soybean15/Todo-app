<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return inertia('Index/Index');
});

Route::prefix('task')->group(function(){

    Route::get('/{filter}',[TodoController::class,'index'] )->name('task.index');
    Route::post('/store',[TodoController::class,'store'] )->name('task.store');
});

