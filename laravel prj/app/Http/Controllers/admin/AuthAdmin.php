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
        if ($request->remember == trans('remember.Remember Me')) {
            $remember = true;
        } else {
            $remember = false;
        }
        //kiểm tra trường remember có được chọn hay không
        // dd(Auth::guard('loyal_admin')->check());

        if (Auth::guard('loyal_admin')->attempt($arr)) {
            // dd('đăng nhập thành công');
            return redirect('admin-mo');
            //đăng nhập thành công thì hiển thị thông báo đăng nhập thành công
        } else {
            dd('tài khoản và mật khẩu chưa chính xác');
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }

    public function getLogout( Request $request )
    {
        if(Auth::guard('loyal_admin')->check()) // this means that the admin was logged in.
        {
            Auth::guard('loyal_admin')->logout();
            return redirect('admin-auth');
        }

        // $this->guard()->logout();
        // $request->session()->invalidate();

        // return $this->loggedOut($request) ?: redirect('/');
    }


}
