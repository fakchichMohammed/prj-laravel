<?php

use App\Http\Controllers\CourseController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/courses', [CourseController::class, 'index'])->name('home');
Route::get('/courses/{id}', [CourseController::class, 'detail'])->name('course_detail');
Route::resource('courses', 'CourseController')->only('show');
Route::resource('users', 'UserController')->only('show');
Route::delete('/courses/{id}/delete', [CourseController::class, 'delete'])->name('courseDelete')->middleware('auth');


require __DIR__.'/auth.php';
