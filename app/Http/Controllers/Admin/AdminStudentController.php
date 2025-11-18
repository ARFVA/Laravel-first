<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = Student::paginate(12);
        $classrooms = Classroom::all();

        return view('admin.student.admin-students', [
            'title' => 'Data Siswa',
            'students' => $students,
            'classrooms' => $classrooms,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:students,email',
            'classroom_id' => 'required|exists:classrooms,id',
            'adress' => 'required|string|max:255',
            'birthday' => 'required|date',
            'score' => 'required|numeric|min:0|max:100',
        ]);

        Student::create($validated);

        return back()->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => "required|email|unique:students,email,$student->id",
            'classroom_id' => 'required|exists:classrooms,id',
            'adress' => 'required|string|max:255',
            'birthday' => 'required|date',
            'score' => 'required|numeric|min:0|max:100',
        ]);

        $student->update($validated);

        return back()->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return back()->with('success', 'Data berhasil dihapus!');
    }
}
