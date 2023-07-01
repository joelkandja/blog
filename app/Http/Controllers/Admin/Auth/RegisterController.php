<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
   public $redirectTo = "admin/login";
   public function __construct()
    {
        $this->middleware('guest');
    }
   public function show()
   {
    return view("admin.auth.register");
   }

   protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }
    public function register(Request $request)
    {

        $user = User::create([
            'name' => $request['name'],
            'prenom' =>$request['prenom'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect($this->redirectTo);

}
}
