<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AdminUser;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');

        if (Auth::guard('admin')->attempt(['name' => $name, 'password' => $password])) {
            return redirect(route('botusers.index'));
        }
        return redirect(route('admin.login'))->withErrors(['password' => 'Неверное имя пользователя или пароль'])->withInput($request->except('password'));

    }
}
