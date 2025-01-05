<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view("pages.manage-user.index", ['users' => User::all()]);
    }

    public function edit($id): View
    {
        $user = User::findOrFail($id);
        return view('pages.manage-user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.manage-user.index')->with('failed', 'User not found.');
        }

        $request->validate([
            'name' => 'string|max:255',
            'email' => 'email|unique:users,email,' . $id,
            'password' => 'nullable|min:8|confirmed',
            'role' => 'in:user,admin', // Role harus 'user' atau 'admin'
        ]);

        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->role = $request->role ?? $user->role;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.manage-user.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->route('admin.manage-user.index')
                ->with('success', 'User is deleted successfully.');
        } else {
            return redirect()->route('admin.manage-user.index')
                ->with('error', 'Cannot Delete user.');
        }

    }
}
