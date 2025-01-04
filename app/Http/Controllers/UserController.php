<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
