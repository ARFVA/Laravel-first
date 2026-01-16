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
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [ProfilController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'profil']);
Route::get('/kontak', [KontakController::class, 'kontak']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/guardian', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::get('/profil', [AdminProfilController::class, 'index'])->name('admin.profil');
        Route::get('/kontak', [AdminKontakController::class, 'index'])->name('admin.kontak');

        Route::get('/student', [AdminStudentController::class, 'index'])->name('admin.students.index');
        Route::post('/student', [AdminStudentController::class, 'store'])->name('admin.students.store');
        Route::put('/students/{student}', [AdminStudentController::class, 'update'])->name('admin.students.update');
        Route::delete('/students/{student}', [AdminStudentController::class, 'destroy'])->name('admin.students.destroy');

        Route::get('/guardians', [AdminGuardianController::class, 'index'])->name('admin.guardians.index');
        Route::post('/guardians', [AdminGuardianController::class, 'store'])->name('admin.guardians.store');
        Route::put('/guardians/{guardian}', [AdminGuardianController::class, 'update'])->name('admin.guardians.update');
        Route::delete('/guardians/{guardian}', [AdminGuardianController::class, 'destroy'])->name('admin.guardians.destroy');

        Route::get('/classrooms', [AdminClassroomController::class, 'index'])->name('admin.classrooms.index');
        Route::post('/classrooms', [AdminClassroomController::class, 'store'])->name('admin.classrooms.store');
        Route::put('/classrooms/{classroom}', [AdminClassroomController::class, 'update'])->name('admin.classrooms.update');

        Route::get('/teachers', [AdminTeacherController::class, 'index'])->name('admin.teachers.index');
        Route::post('/teachers', [AdminTeacherController::class, 'store'])->name('admin.teachers.store');
        Route::put('/teachers/{teacher}', [AdminTeacherController::class, 'update'])->name('admin.teachers.update');
        Route::delete('/teachers/{teacher}', [AdminTeacherController::class, 'destroy'])->name('admin.teachers.destroy');

        Route::get('/subjects', [AdminSubjectController::class, 'index'])->name('admin.subjects.index');
        Route::post('/subjects', [AdminSubjectController::class, 'store'])->name('admin.subjects.store');
        Route::put('/subjects/{subject}', [AdminSubjectController::class, 'update'])->name('admin.subjects.update');
    });
