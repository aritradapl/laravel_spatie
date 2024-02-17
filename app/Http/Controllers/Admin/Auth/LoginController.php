<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $admin = User::where('email',$request->email)->first();
        if($admin && ($admin->user_type!=1 && $admin->user_type!=3)){
            return redirect()->route('admin.login')
                    ->with('status','Your credentials does not match.');
        }else{
            $credentials = $request->only('email','password');
            $authCheck = Auth::guard('admin')->attempt($credentials);
            if($authCheck){
                return redirect()->route('admin.home');
            }else{
                return redirect()->route('admin.login')->with('status','Invalid Credentials');
            }
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
