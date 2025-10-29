<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('subject')->get();

        return view('admin-teacher', [
            'title' => 'Data Guru',
            'teachers' => $teachers
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:teachers,email',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject_id' => $request->subject_id,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);

        return redirect()->route('admin.teachers.index')->with('success', 'Data guru berhasil ditambahkan!');
    }
}
