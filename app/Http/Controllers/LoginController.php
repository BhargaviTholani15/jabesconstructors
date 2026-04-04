<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login()
    {
        return view('login');
    }
    public function loginsubmit(Request $request)
    {

        $email = $request->input('email');
        $user = User::where('email', $email)
            ->where('user_type', 'ADMIN')
            ->first();

        if ($user != null) {
            $password = $request->input('password');
            if (Hash::check($password, $user->password)) {
                auth()->login($user);
                return redirect('/_admin/secure/dashboard');
            }
            return back()->withInput()->with('error', 'Wrong credentials ');
        }

        return back()->withInput()->with('error', 'Email not exists');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('_admin');
    }
}
