<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect('task/today');
});

Route::prefix('task')->group(function(){

    Route::get('/{filter}',[TodoController::class,'index'] )->name('task.index');
    Route::post('/store',[TodoController::class,'store'] )->name('task.store');
    Route::post('/toggle-task',[TodoController::class,'toggleTaskCompletion'] )->name('task.toggle-completion');
    Route::post('/destroy',[TodoController::class,'destroy'] )->name('task.destroy');
    Route::post('/restore',[TodoController::class,'restore'] )->name('task.restore');
    Route::get('/show/{task}',[TodoController::class,'show'] )->name('task.show');
    Route::post('/update',[TodoController::class,'update'] )->name('task.update');




});

