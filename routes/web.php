<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricullarController;


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

// route to home
Route::get('/', function () {
    return view('home', [
        'name' => 'Gungwah',
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi']
    ]);
});

// route to student
Route::get('/students', [StudentController::class, 'index']);
// to show detail
Route::get('/student{id}', [StudentController::class, 'show']);

// route to class
Route::get('/class', [ClassController::class, 'index']);
Route::get('/class{id}', [ClassController::class, 'show']);

Route::get('/extracurricullar', [ExtracurricullarController::class, 'index']);
Route::get('/extracurricullar/{id}', [ExtracurricullarController::class, 'detail']);

Route::get('/teacher', [TeacherController::class, 'index']);