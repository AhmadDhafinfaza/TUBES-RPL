<?php

use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\TaskController;
use App\Http\Controllers\User\EvalController;
use App\Http\Controllers\User\RepeatController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('is_admin');
Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');
Route::get('/user/dashboard', [HomeController::class, 'userHome'])->name('user.dashboard')->middleware('is_admin');

// Routing user profile
Route::get('/user/profile', [ProfileController::class, 'index'])->name('user.profile')->middleware('is_admin');

// Routing user Task
Route::get('/user/task', [TaskController::class, 'index'])->name('user.task')->middleware('is_admin');
Route::get('/user/task/create', [TaskController::class, 'create'])
        ->name('user.task.create')
        ->middleware('is_admin');
Route::post('/user/task/store', [TaskController::class, 'store'])
        ->name('user.task.store')
        ->middleware('is_admin');
Route::delete('/user/task/{id}/destroy', [TaskController::class, 'destroy'])
        ->name('user.task.destroy')
        ->middleware('is_admin');   
Route::get('/user/task/{id}/edit', [TaskController::class, 'edit'])
        ->name('user.task.edit')
        ->middleware('is_admin');        
Route::put('/user/task/{id}/edit', [TaskController::class, 'update'])
        ->name('user.task.update')
        ->middleware('is_admin');

// Routing user Eval
Route::get('/user/eval', [EvalController::class, 'index'])->name('user.eval')->middleware('is_admin');
Route::get('/user/task/create', [TaskController::class, 'create'])
        ->name('user.task.create')
        ->middleware('is_admin');
Route::post('/user/task/store', [TaskController::class, 'store'])
        ->name('user.task.store')
        ->middleware('is_admin');
Route::delete('/user/task/{id}/destroy', [TaskController::class, 'destroy'])
        ->name('user.task.destroy')
        ->middleware('is_admin');   
Route::get('/user/task/{id}/edit', [TaskController::class, 'edit'])
        ->name('user.task.edit')
        ->middleware('is_admin');        
Route::put('/user/task/{id}/edit', [TaskController::class, 'update'])
        ->name('user.task.update')
        ->middleware('is_admin');

// Routing user Calendar Repeat
Route::get('/user/calendar', [HomeController::class, 'calendarRepeat'])->name('user.calendar')->middleware('is_admin');
Route::get('/user/repeat', [HomeController::class, 'Repeat'])->name('user.repeat')->middleware('is_admin');
Route::get('/user/repeat/create', [HomeController::class, 'create'])->name('user.create')->middleware('is_admin');
Route::get('/user/repeat/edit', [HomeController::class, 'edit'])->name('user.repeat.edit')->middleware('is_admin');

