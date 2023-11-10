<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\StudentController;
use App\http\Controllers\TeacherController;
use App\http\Controllers\CourseController;
use App\http\Controllers\BatchController;
use App\http\Controllers\EnrollmentController;
use App\http\Controllers\PaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});
Route::resource('/students', StudentController::class);
Route::resource('/teachers', TeacherController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/batches',BatchController::class);
Route::resource('/enrollments',EnrollmentController::class);
Route::resource('/payments',PaymentController::class);
Route::get('report/report1/{pid}',[ReportController::class,'report1']);
