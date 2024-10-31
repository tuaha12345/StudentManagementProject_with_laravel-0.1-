<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return view('layout');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/report/{pid_id}', [ReportController::class, 'report'])->name('report');

//------------------------------------- payments------------------------------------
Route::get('/payments',[PaymentController::class,'index'])->name('payments.index');
Route::get('/payments/show/{id}',[PaymentController::class,'show'])->name('payments.show');
Route::get('payments/create',[PaymentController::class,'create'])->name('payments.create');
Route::get('payments/edit/{id}',[PaymentController::class,'edit'])->name('payments.edit');
Route::post('/payments/update/{id}',[PaymentController::class,'update'])->name('payments.update');
Route::post('/payments/store',[PaymentController::class,'store'])->name('payments.store');
Route::get('/payments/destroy/{id}',[PaymentController::class,'destroy'])->name('payments.destroy');
//------------------------------------- Enrollments------------------------------------
Route::get('/enrollments',[EnrollmentController::class,'index'])->name('enrollments.index');
Route::get('/enrollments/show/{id}',[EnrollmentController::class,'show'])->name('enrollments.show');
Route::get('enrollments/create',[EnrollmentController::class,'create'])->name('enrollments.create');
Route::get('enrollments/edit/{id}',[EnrollmentController::class,'edit'])->name('enrollments.edit');
Route::post('/enrollments/update/{id}',[EnrollmentController::class,'update'])->name('enrollments.update');
Route::post('/enrollments/store',[EnrollmentController::class,'store'])->name('enrollments.store');
Route::get('/enrollments/destroy/{id}',[EnrollmentController::class,'destroy'])->name('enrollments.destroy');
//------------------------------------- Batches------------------------------------
Route::get('/batches',[BatchController::class,'index'])->name('batches.index');
Route::get('/batches/show/{id}',[BatchController::class,'show'])->name('batches.show');
Route::get('batches/create',[BatchController::class,'create'])->name('batches.create');
Route::get('batches/edit/{id}',[BatchController::class,'edit'])->name('batches.edit');
Route::post('/batches/update/{id}',[BatchController::class,'update'])->name('batches.update');
Route::post('/batches/store',[BatchController::class,'store'])->name('batches.store');
Route::get('/batches/destroy/{id}',[BatchController::class,'destroy'])->name('batches.destroy');
//------------------------------------- Courses------------------------------------
Route::get('/courses',[CourseController::class,'index'])->name('courses.index');
Route::get('/courses/show/{id}',[CourseController::class,'show'])->name('courses.show');
Route::get('courses/create',[CourseController::class,'create'])->name('courses.create');
Route::get('courses/edit/{id}',[CourseController::class,'edit'])->name('courses.edit');
Route::post('/courses/update/{id}',[CourseController::class,'update'])->name('courses.update');
Route::post('/courses/store',[CourseController::class,'store'])->name('courses.store');
Route::get('/courses/destroy/{id}',[CourseController::class,'destroy'])->name('courses.destroy');

//-------------------------------------------- Teachers------------------
Route::get('/teachers',[TeacherController::class,'index'])->name('teachers.index');
Route::get('/teachers/show/{id}',[TeacherController::class,'show'])->name('teachers.show');
Route::get('teachers/create',[TeacherController::class,'create'])->name('teachers.create');
Route::get('teachers/edit/{id}',[TeacherController::class,'edit'])->name('teachers.edit');
Route::post('/teachers/update/{id}',[TeacherController::class,'update'])->name('teachers.update');
Route::post('/teachers/store',[TeacherController::class,'store'])->name('teachers.store');
Route::get('/teachers/destroy/{id}',[TeacherController::class,'destroy'])->name('teachers.destroy');
//------------------------------------- students------------------------------------
Route::get('/students',[StudentController::class,'index'])->name('students.index');
Route::get('/students/show/{id}',[StudentController::class,'show'])->name('students.show');
Route::get('students/create',[StudentController::class,'create'])->name('students.create');
Route::get('students/edit/{id}',[StudentController::class,'edit'])->name('students.edit');
Route::post('/students/update/{id}',[StudentController::class,'update'])->name('students.update');
Route::post('/students/store',[StudentController::class,'store'])->name('students.store');
Route::get('/students/destroy/{id}',[StudentController::class,'destroy'])->name('students.destroy');
