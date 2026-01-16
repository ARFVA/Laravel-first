<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $guardians = Guardian::query()
            ->when($search, function ($query, $search) {
                $query
                    ->where('name', 'like', "%{$search}%")
                    ->orWhere('job', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view('admin.guardian.admin-guardian', [
            'title' => 'Data Wali',
            'guardians' => $guardians,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'address' => 'required|string|max:255',
        ]);

        Guardian::create($validated);

        return redirect()->back()->with('success', 'Data wali berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $guardian = Guardian::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'job' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'address' => 'required|string|max:255',
        ]);

        $guardian->update($validated);

        return redirect()->back()->with('success', 'Data wali berhasil diedit!');
    }

    public function destroy($id)
    {
        $guardian = Guardian::findOrFail($id);
        $guardian->delete();

        return redirect()->back()->with('success', 'Data wali berhasil dihapus!');
    }
}
