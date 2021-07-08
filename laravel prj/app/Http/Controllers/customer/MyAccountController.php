<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\Auth;
use App\Models\OderModel;
use App\Http\Requests\myAccountRequest;


class MyAccountController extends Controller
{
    //edit account
    public function editAcc()
    {
        $cus = Auth::guard('loyal_customer')->user();
        return view('customer/pages/myAccount/editAcc', compact('cus'));

    }

    public function updateAcc()
    {
        $cus = Auth::guard('loyal_customer')->user();
        // $cus = Auth::guard('loyal_customer')->user();
        return view('customer/pages/myAccount/updateCusAcc',compact('cus'));
    }

    public function postUpdateCusAcc(Request $request)
    {
        $cus = Auth::guard('loyal_customer')->user();
        $newData = $request->only(['first_name', 'last_name', 'address', 'birthday', 'gender', 'city', 'tel']);
        if ($cus) {
            $cus->update($newData);
            return redirect('/editAcc');
        }else{
            return redirect('/editAcc')->back()->withErrors('err','K tim thay customer');
        }

    }

    public function updatePass()
    {
        return view('customer/pages/myAccount/pass');
    }

    public function postUpdatePass(myAccountRequest $request)
        {
            if (Auth::guard('loyal_customer')->check()) {
                $cus = Auth::guard('loyal_customer')->user();
                $arr = [
                    'email' => $cus->email,
                    'password' => $request->current_password,
                ];
                if (Auth::guard('loyal_customer')->attempt($arr)) {
                    if ($request->password == $request->password_confirmation) {
                        $customer = CustomerModel::find($cus->id);
                        $customer->update([
                            'password'=>bcrypt($request->password)
                        ]);
                        return redirect('editAcc')->with('success','Cap nhat mat khau thanh cong');
                    }else{
                        return redirect()->back()->withErrors('Password moi chua giong nhau')->withInput();
                    }
                }else{
                    return redirect()->back()->withErrors('Khong dung Password cu')->withInput();
                }
            } else
            {
                return redirect()->to('/editAcc');
            }
        }

        //view order
        public function viewOrder() {
            $cus = Auth::guard('loyal_customer')->user();
            $orders = OderModel::where('customer_id', $cus['id'])->get();
            return view('customer/pages/viewOrder', compact('orders', 'cus'));
        }
}
