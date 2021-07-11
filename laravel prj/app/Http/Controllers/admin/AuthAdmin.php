<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; //user model can kiem tra
use App\Models\ItemModel;
use Input;
use Auth; //use thư viện auth
use Session;

class AuthAdmin extends Controller
{
    public function getLogin()
    {
        return view('admin/pages/login');
    }

    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if ($request->remember) {
            $remember = true;
        }else{
            $remember = false;
        }

        if (Auth::guard('loyal_admin')->attempt($arr, $remember)) {
            return redirect('admin-mo');
        } else {
            return redirect()->back()->withErrors("Incorrect account and password")->withInput();
        }
    }

    public function getLogout( Request $request )
    {
        if(Auth::guard('loyal_admin')->check())
        {
            Auth::guard('loyal_admin')->logout();
            return redirect('admin-auth');
        }
    }


}
