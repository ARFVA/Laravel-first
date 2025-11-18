<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminSubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('teachers')->get();

        return view('admin.subject.admin-subject', [
            'title' => 'Subject',
            'subjects' => $subjects
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'nullable|string|max:255',
        ]);

        Subject::create($request->only(['name', 'description']));

        return redirect()->back()->with('success', 'Subject berhasil ditambahkan!');
    }

    public function destroy(string $id)
    {
        $subject = Subject::with('teachers')->findOrFail($id);
        $subject->teachers()->delete();
        $subject->delete();

        return redirect()->back()->with('success', 'Subject dan semua guru terkait berhasil dihapus!');
    }
}
