<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\Auth;
use Validator;


class MyAccountController extends Controller
{
    //edit account
    public function editAcc()
    {
        $cus = Auth::guard('loyal_customer')->user();
        return view('customer/pages/myAccount/editAcc', compact('cus'));

    }

    public function updateAcc($id)
    {
        $cus = CustomerModel::find($id);
        // $cus = Auth::guard('loyal_customer')->user();
        return view('customer/pages/myAccount/updateCusAcc',compact('cus'));
    }

    public function postUpdateCusAcc($id, Request $request)
    {
        $cus = CustomerModel::find($id);
        $newData = $request->only(['first_name', 'last_name', 'address', 'birthday', 'gender', 'city', 'tel']);
        if ($cus) {
            $cus->update($newData);
            return redirect('/editAcc');
        }else{
            return redirect('/editAcc')->back()->withErrors('err','K tim thay customer');
        }

    }

    public function updatePass($id)
    {
        return view('customer/pages/myAccount/pass');
    }

    public function postUpdatePass($id, Request $request)
        {
        if(Auth::Check())
        {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if($validator->fails())
            {
            return response()->json(array('error' => $validator->getMessageBag()->toArray()), 400);
            }
            else
            {  
            $current_password = Auth::User()->password;
            if(Hash::check($request_data['current-password'], $current_password))
            {           
                $user_id = Auth::User()->id;                       
                $obj_user = CustomerModel::find($user_id);
                $obj_user->password = Hash::make($request_data['password']);
                $obj_user->save(); 
                return "ok";
            }
            else
            {           
                $error = array('current-password' => 'Please enter correct current password');
                return response()->json(array('error' => $error), 400);   
            }
            }        
        }
        else
        {
            return redirect()->to('/editAcc');
        }    
        return view('customer/pages/myAccount/pass');
        }
}
