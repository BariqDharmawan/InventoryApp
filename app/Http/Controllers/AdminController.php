<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ths = ['id', 'email', 'role', 'is active'];

        // Just for test change this later
        $users = User::all()->where('role', '!=', 'superadmin');

        return view('pages.admin.index', [
            'ths' => $ths,
            'users' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->addUser($request);

        return redirect()->back()->with('success', "Berhasil tambah admin : $request->email");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $admin = User::findOrFail($id);

        return view('pages.admin.edit', ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', "Berhasil mengubah data admin $user->name");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->update(['is_active' => 0]);

        return redirect()->back()->with('success', "Berhasil menonaktifkan admin $user->email");
    }

    public function resetPassword(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', 'confirmed'],
        ]);

        $user->password = Hash::make($request->password);
        $user->is_password_changed = 1;
        $user->save();

        return redirect()->back()->with('success', "Password berhasil di reset");
    }
}
