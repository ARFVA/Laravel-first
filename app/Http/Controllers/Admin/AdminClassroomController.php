<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $classrooms = Classroom::with('students')
            ->when($search, function ($query, $search) {
                $query
                    ->where('name', 'like', "%{$search}%")
                    ->orWhereHas('students', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    });
            })
            ->latest()
            ->paginate(2) 
            ->withQueryString();

        return view('admin.classroom.admin-classroom', [
            'title' => 'Classroom',
            'classrooms' => $classrooms,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Classroom::create($validated);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $classroom = Classroom::findOrFail($id);
        $classroom->update($validated);

        return redirect()->back()->with('success', 'Data berhasil diupdate!');
    }

    public function destroy() {}
}
