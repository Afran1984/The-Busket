<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // User মডেল ইমপোর্ট

class UserController extends Controller
{
    public function index()
    {
        // সব ইউজারকে DB থেকে আনা
        $users = User::all(); 

        // Blade view-এ পাঠানো
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
}
