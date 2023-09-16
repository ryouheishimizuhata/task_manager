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

Route::get('/tasks/{bigtask_id}',[App\Http\Controllers\MedtaskController::class ,'index']) ->name('detail');

Route::get('/tasks/{bigtask_id}/{medtask_id}', [App\Http\Controllers\SmalltaskController::class ,'index'])->name('detail2');