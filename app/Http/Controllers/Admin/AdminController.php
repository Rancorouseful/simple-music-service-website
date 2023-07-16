<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user || !$user->isAdmin) {
            abort(404);
        }

        $users = User::where('role', '!=', 'admin')->paginate();

        return view('admin.home', compact('users'));
    }
}
