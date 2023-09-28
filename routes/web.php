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
Route::delete('/tasks/{id}/delete', [App\Http\Controllers\BigtaskController::class, 'destroy'])->name('delete_data');
Route::get('/tasks/{id}/edit', [App\Http\Controllers\BigtaskController::class, 'edit'])->name('edit_data');
Route::put('/tasks/{id}/edit', [App\Http\Controllers\BigtaskController::class, 'update'])->name('update_data');
Route::post('/tasks', [App\Http\Controllers\BigtaskController::class, 'store'])->name('store_data');

Route::get('/tasks/{bigtask}',[App\Http\Controllers\MedtaskController::class ,'index']) ->name('index_2');
Route::get('/tasks/{bigtask}/create', [App\Http\Controllers\MedtaskController::class, 'create'])->name('create_2');
Route::delete('/tasks/{bigtask}/{id}/delete', [App\Http\Controllers\MedtaskController::class, 'destroy'])->name('delete_data_2');
Route::get('/tasks/{bigtask}/{id}/edit', [App\Http\Controllers\MedtaskController::class, 'edit'])->name('edit_data_2');
Route::put('/tasks/{bigtask}/{id}/edit', [App\Http\Controllers\MedtaskController::class, 'update'])->name('update_data_2');
Route::post('/tasks/{bigtask}', [App\Http\Controllers\MedtaskController::class, 'store'])->name('store_data_2');

Route::get('/tasks/{bigtask}/{medtask}', [App\Http\Controllers\SmalltaskController::class ,'index'])->name('index_3');
Route::get('/tasks/{bigtask}/{medtask}/create', [App\Http\Controllers\SmalltaskController::class, 'create'])->name('create_3');
Route::delete('/tasks/{bigtask}/{medtask}/{id}/delete', [App\Http\Controllers\SmalltaskController::class, 'destroy'])->name('delete_data_3');
Route::get('/tasks/{bigtask}/{medtask}/{id}/edit', [App\Http\Controllers\SmalltaskController::class, 'edit'])->name('edit_data_3');
Route::put('/tasks/{bigtask}/{medtask}/{id}/edit', [App\Http\Controllers\SmalltaskController::class, 'update'])->name('update_data_3');
Route::post('/tasks/{bigtask}/{medtask}', [App\Http\Controllers\SmalltaskController::class, 'store'])->name('store_data_3');