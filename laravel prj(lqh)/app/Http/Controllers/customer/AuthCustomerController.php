<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth; //use thư viện auth
use Session;

class AuthCustomerController extends Controller
{
    public function getLogin()
    {
        return view('customer/pages/login');
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::guard('loyal_customer')->attempt($arr)) {
            return redirect('/');
        } else {
            return redirect('login');
        }
    }

    public function getLogout( Request $request )
    {
        if(Auth::guard('loyal_customer')->check()) // this means that the admin was logged in.
        {
            Auth::guard('loyal_customer')->logout();
            return redirect('login');
        }

        // $this->guard()->logout();
        // $request->session()->invalidate();

        // return $this->loggedOut($request) ?: redirect('/');
    }
}
