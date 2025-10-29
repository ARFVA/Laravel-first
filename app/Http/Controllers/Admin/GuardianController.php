<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    public function index()
    {
        $guardians = Guardian::all();
        return view('admin-guardian', compact('guardians'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'address' => 'required|string|max:255',
        ]);

        Guardian::create($request->only(['name', 'job', 'phone', 'email', 'address']));

        return redirect()->route('admin.guardians.index')->with('success', 'Data wali berhasil ditambahkan!');
    }
}
