<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $teachers = Teacher::with('subject')
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%")
                        ->orWhereHas('subject', function ($q_subject) use ($search) {
                            $q_subject->where('name', 'like', "%{$search}%");
                        });
                });
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $subjects = Subject::doesntHave('teacher')->get();

        return view('admin.teacher.admin-teacher', [
            'title' => 'Data Guru',
            'teachers' => $teachers,
            'subjects' => $subjects, 
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:teachers,email',
            'subject_id' => 'required|exists:subjects,id',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        Teacher::create($validated);

        return redirect()->back()->with('success', 'Data guru berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100|unique:teachers,email,' . $id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($validated);

        return redirect()->back()->with('success', 'Data guru berhasil diupdate!');
    }

    public function destroy(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->back()->with('success', 'Data guru berhasil dihapus!');
    }
}
