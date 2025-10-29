<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource for admin.
     */
    public function index()
    {
        $students = Student::with('classroom')->get();
        return view('admin-students', [
            'title' => 'Data Siswa',
            'students' => $students
        ]);
    }

    /**
     * Store a newly created student in storage (admin).
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'classroom_id' => 'required|exists:classrooms,id',
            'adress' => 'required|string|max:255',
            'birthday' => 'required|date',
            'score' => 'required|numeric|min:0|max:100',
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'classroom_id' => $request->classroom_id,
            'adress' => $request->adress,
            'birthday' => $request->birthday,
            'score' => $request->score,
        ]);

    return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }
}
