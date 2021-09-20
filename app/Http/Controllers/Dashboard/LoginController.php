<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;


class LoginController extends Controller
{
    public function login()
    {
        return view('dashboard.auth.login');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
           
            return redirect() -> route('admin.dashboard');
        }
           
            return redirect()->back()->with(['error' => 'Email or Password Not Correct']);
    }

    public function logout()
    {
       $guard = $this->getGuard() ;
       $guard -> logout();
       return redirect()->route('admin.login'); 
    }
    private function getGuard()
    {
        return auth('admin');
    }
}
