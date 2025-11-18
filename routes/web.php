<?php

use App\Http\Controllers\admin\AdminKontakController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AdminProfilController;
use App\Http\Controllers\admin\AdminGuardianController;
use App\Http\Controllers\admin\AdminClassroomController;
use App\Http\Controllers\admin\AdminSubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);

Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/profil', [AdminProfilController::class, 'index']);
Route::get('/admin/kontak', [AdminKontakController::class, 'index']);

Route::get('/admin/students', [AdminStudentController::class, 'index'])->name('students.index');
Route::post('/admin/students', [AdminStudentController::class, 'store'])->name('students.store');
Route::put('/admin/students/{student}', [AdminStudentController::class, 'update'])->name('students.update');
Route::delete('/admin/students/{student}', [AdminStudentController::class, 'destroy'])->name('students.destroy');

Route::get('/admin/guardians', [AdminGuardianController::class, 'index'])->name('guardians.index');
Route::post('/admin/guardians', [AdminGuardianController::class, 'store'])->name('guardians.store');
Route::put('/admin/guardians/{guardian}', [AdminGuardianController::class, 'update'])->name('guardians.update');
Route::delete('/admin/guardians/{guardian}', [AdminGuardianController::class, 'destroy'])->name('guardians.destroy');

Route::get('/admin/classrooms', [AdminClassroomController::class, 'index'])->name('classroom.index');
Route::post('/admin/classrooms', [AdminClassroomController::class, 'store'])->name('classroom.store');
Route::put('/admin/classrooms/{classroom}', [AdminClassroomController::class, 'update'])->name('classroom.update');
Route::delete('/admin/classrooms/{classroom}', [AdminClassroomController::class, 'destroy'])->name('classroom.destroy');

Route::get('/admin/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
Route::post('/admin/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');
Route::delete('/admin/teacher/{teacher}', [AdminTeacherController::class, 'destroy'])->name('teacher.destroy');

Route::get('/admin/subject', [AdminSubjectController::class, 'index'])->name('subject.index');
Route::post('/admin/subject', [AdminSubjectController::class, 'store'])->name('subject.store');
Route::delete('/admin/subject/{subject}', [AdminSubjectController::class, 'destroy'])->name('subject.destroy');
