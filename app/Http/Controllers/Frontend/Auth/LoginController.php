<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.auth.login');
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email',$request->email)->first();
        if($user && $user->user_type!=2){
            return redirect()->route('user.login')
                    ->with('status','Your credentials does not match.');
        }else{
            $credentials = $request->only('email','password');
            $authCheck = Auth::guard('user')->attempt($credentials);
            if($authCheck){
                return redirect()->route('user.home');
            }else{
                return redirect()->route('user.login')->with('status','Invalid Credentials');
            }
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('user.login');
    }
}
