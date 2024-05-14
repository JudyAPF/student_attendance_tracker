<?php

use App\Http\Controllers\BlockController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AdminDashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::get('/admin/create_class', [ClassController::class, 'showCreateClass'])->middleware(['auth', 'verified'])->name('admin.create_class');

Route::post('/admin/create_class', [ClassController::class, 'createClass'])->middleware(['auth', 'verified'])->name('admin.create_class');

Route::get('/admin/delete_class/{id}', [ClassController::class, 'deleteClass'])->middleware(['auth', 'verified'])->name('admin.delete_class');

Route::get('/admin/delete_class/{id}', [ClassController::class, 'deleteClass'])->middleware(['auth', 'verified'])->name('admin.delete_class');

Route::get('/admin/edit_class/{id}', [ClassController::class, 'editClass'])->middleware(['auth', 'verified'])->name('admin.edit_class');

Route::post('/admin/edit_class/{id}', [ClassController::class, 'updateClass'])->middleware(['auth', 'verified'])->name('admin.update_class');

Route::get('/admin/create_block', [BlockController::class, 'showCreateBlock'])->middleware(['auth', 'verified'])->name('admin.create_block');

Route::post('/admin/create_block', [BlockController::class, 'createBlock'])->middleware(['auth', 'verified'])->name('admin.create_block');

Route::get('/admin/delete_block/{id}', [BlockController::class, 'deleteBlock'])->middleware(['auth', 'verified'])->name('admin.delete_block');

Route::get('/admin/edit_block/{id}', [BlockController::class, 'editBlock'])->middleware(['auth', 'verified'])->name('admin.edit_block');

Route::post('/admin/edit_block/{id}', [BlockController::class, 'updateBlock'])->middleware(['auth', 'verified'])->name('admin.update_block');

Route::get('/admin/create_instructor', [InstructorsController::class, 'showInstructors'])->middleware(['auth', 'verified'])->name('admin.create_instructor');

Route::post('/admin/create_instructor', [InstructorsController::class, 'createInstructor'])->middleware(['auth', 'verified'])->name('admin.create_instructor');

Route::get('/admin/delete_instructor/{id}', [InstructorsController::class, 'deleteInstructor'])->middleware(['auth', 'verified'])->name('admin.delete_instructor');

Route::get('/admin/edit_instructor/{id}', [InstructorsController::class, 'editInstructor'])->middleware(['auth', 'verified'])->name('admin.edit_instructor');

Route::post('/admin/edit_instructor/{id}', [InstructorsController::class, 'updateInstructor'])->middleware(['auth', 'verified'])->name('admin.update_instructor');

Route::get('/admin/create_students', [StudentsController::class, 'showStudents'])->middleware(['auth', 'verified'])->name('admin.create_students');

Route::post('/admin/create_students', [StudentsController::class, 'createStudent'])->middleware(['auth', 'verified'])->name('admin.create_students');

Route::get('/admin/delete_student/{id}', [StudentsController::class, 'deleteStudent'])->middleware(['auth', 'verified'])->name('admin.delete_student');

Route::get('/admin/edit_student/{id}', [StudentsController::class, 'editStudent'])->middleware(['auth', 'verified'])->name('admin.edit_student');

Route::post('/admin/edit_student/{id}', [StudentsController::class, 'updateStudent'])->middleware(['auth', 'verified'])->name('admin.update_student');

Route::get('/view_students', [StudentsController::class, 'viewStudents'])->middleware(['auth', 'verified'])->name('view_students');

Route::get('/take_attendance', [AttendanceController::class, 'takeAttendance'])->middleware(['auth', 'verified'])->name('take_attendance');

Route::post('/take_attendance', [AttendanceController::class, 'saveAttendance'])->middleware(['auth', 'verified'])->name('take_attendance');

Route::get('/view_attendance', [AttendanceController::class, 'viewAttendance'])->middleware(['auth', 'verified'])->name('view_attendance');

Route::get('/view_attendance_form', [AttendanceController::class, 'viewAttendanceForm'])->name('view_attendance_form');
Route::post('/view_student_attendance', [AttendanceController::class, 'viewStudentAttendance'])->name('view_student_attendance');

Route::get('/attendance', [AttendanceController::class, 'downloadAttendance'])->middleware(['auth', 'verified'])->name('attendance');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
});

require __DIR__.'/auth.php';
