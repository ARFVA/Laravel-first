<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminSubjectController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $subjects = Subject::with('teacher')
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%")
                        ->orWhereHas('teacher', function ($q_teacher) use ($search) {
                            $q_teacher->where('name', 'like', "%{$search}%");
                        });
                });
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('admin.subject.admin-subject', [
            'title' => 'Subject',
            'subjects' => $subjects,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:subjects,name',
            'description' => 'nullable|string|max:255',
        ]);

        Subject::create($validated);

        return redirect()->back()->with('success', 'Subject berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:subjects,name,' . $id,
            'description' => 'nullable|string|max:255',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->update($validated);

        return redirect()->back()->with('success', 'Subject berhasil diupdate!');
    }
}
