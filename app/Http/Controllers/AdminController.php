<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user || !$user->isAdmin) {
            abort(404);
        }

        $users = User::with('socialUsers')->paginate();

        return view('admin.home', compact('users'));
    }
}
