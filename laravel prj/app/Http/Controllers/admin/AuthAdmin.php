<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User; //user model can kiem tra
use App\Models\ItemModel;
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

        if (Auth::guard('loyal_admin')->attempt($arr)) {
            return redirect('admin-mo');
        } else {
            return redirect()->back()->withErrors("tài khoản và mật khẩu chưa chính xác")->withInput();
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
