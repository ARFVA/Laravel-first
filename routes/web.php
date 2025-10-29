<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\TeacherController as AdminTeacherController;
use App\Http\Controllers\Admin\GuardianController as AdminGuardianController;

Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/student', [StudentController::class, 'index'])->name('students.index');
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', fn() => view('admin-dashboard'))->name('admin-dashboard');
    Route::get('/profil', fn() => view('admin-profil'))->name('admin-profil');
    Route::get('/kontak', fn() => view('admin-kontak'))->name('admin-kontak');

    Route::get('/students', [AdminStudentController::class, 'index'])->name('admin.students.index');
    Route::post('/students/store', [AdminStudentController::class, 'store'])->name('admin.students.store');

    Route::get('/guardians', fn() => view('admin-guardian', ['guardians' => \App\Models\Guardian::all()]));

	Route::get('/guardians', [AdminGuardianController::class, 'index'])->name('admin.guardians.index');
    Route::post('/guardians/store', [AdminGuardianController::class, 'store'])->name('admin.guardians.store');

    Route::get('/classroom', fn() => view('admin-classroom', ['classrooms' => \App\Models\Classroom::with('students')->get()]));
    Route::get('/teacher', fn() => view('admin-teacher', ['teachers' => \App\Models\Teacher::with('subject')->get()]));

	Route::get('/teachers', [AdminTeacherController::class, 'index'])->name('admin.teachers.index');
    Route::post('/teachers/store', [AdminTeacherController::class, 'store'])->name('admin.teachers.store');
	
    Route::get('/subject', fn() => view('admin-subject', ['subjects' => \App\Models\Subject::with('teachers')->get()]));
});
