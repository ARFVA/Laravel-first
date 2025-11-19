<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::with('students')->get();

        return view('admin.classroom.admin-classroom', [
            'title' => 'Classroom',
            'classrooms' => $classrooms
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

    public function destroy()
    {

    }
}
