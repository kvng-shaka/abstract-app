<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        //$users = User::whereNull('approved_at')->get();

        return view('users')->with('users', $users);
    }

    public function approve($id)
    {
        $user = User::findOrFail($id);
        $user->update(['approved_at' => now()]);

        return redirect()->route('admin.users.index')->withMessage('User approved successfully');
    }
}
