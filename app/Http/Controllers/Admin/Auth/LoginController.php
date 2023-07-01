<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    // public $redirectTo = 'admin/dashboard/';
    public $redirectTo = "admin/login";
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function show()
    {
        return view("admin.auth.login");
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('admin/dashboard/');
        } else {
            $errors = 'Email ou mot de passe incorrect';
            return Redirect::back()->withErrors([
                'message' => $errors
            ]);
        }
    }
    public function logout(Request $request)
    {

        Auth()->logout();
        return redirect($this->redirectTo);
    }
}
