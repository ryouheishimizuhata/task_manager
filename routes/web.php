<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//タスク index一覧表示
Route::get('/tasks',[App\Http\Controllers\BigtaskController::class,'index'])->name('index');
Route::get('/tasks/create', [App\Http\Controllers\BigtaskController::class, 'create'])->name('create');
Route::get('/tasks/edit', [App\Http\Controllers\BigtaskController::class, 'create'])->name('edit');
Route::post('/tasks', [App\Http\Controllers\BigtaskController::class, 'store']);

Route::get('/tasks/{bigtask}',[App\Http\Controllers\MedtaskController::class ,'index']) ->name('index_2');
Route::get('/tasks/{bigtask}/create', [App\Http\Controllers\MedtaskController::class, 'create'])->name('create_2');
Route::post('/tasks/{bigtask}', [App\Http\Controllers\MedtaskController::class, 'store']);

Route::get('/tasks/{bigtask}/{medtask}', [App\Http\Controllers\SmalltaskController::class ,'index'])->name('index_3');
Route::get('/tasks/{bigtask}/{medtask}/create', [App\Http\Controllers\SmalltaskController::class, 'create'])->name('create_3');
Route::post('/tasks/{bigtask}/{medtask}', [App\Http\Controllers\SmalltaskController::class, 'store']);