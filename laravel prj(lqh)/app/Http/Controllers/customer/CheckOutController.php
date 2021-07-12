<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\OderModel;
use App\Models\OderItemModel;
use App\Models\ItemDetailModel;
use App\Jobs\SendEmail;
Use \Carbon\Carbon;
// use Session;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    private $__data = [];

    public function checkout()
    {
        $currentCustomer = Auth::guard('loyal_customer')->user();
        $loadCart = loadCart();
        $order = $loadCart[0];
        $totalItem = $loadCart[1];
        $totalMoney = $loadCart[2];
        return view('customer/pages/checkout', compact('currentCustomer','order', 'totalMoney','totalItem'));
    }

    public function Order()
    {
        $loadCart = loadCart();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d h:i:s');
        $this->__data['info'] = Auth::guard('loyal_customer')->user();
        $this->__data['totalItem'] = $loadCart[1];
        $this->__data['totalMoney'] = $loadCart[2];
        $this->__data['totalDiscount'] = $loadCart[3];
        $this->__data['cart'] = [];
        if (Session::get("cart")) {
            $this->__data['cart'] = Session::get("cart");
        }else{
            Session::put('msg', 'Cart is empty, please order first');
            return redirect('/');
        }
        $order = new OderModel;
        $order->customer_id = $this->__data['info']->id;
        $order->order_date = $now;
        $order->total_price = $this->__data['totalMoney'];
        $order->total_discount = $this->__data['totalDiscount'];
        $order->total_item = $this->__data['totalItem'];
        if ($order->save()) {
            $orderId = $order->id;
            $orderDetails = [];
            if (count($this->__data['cart'])>0) {
                foreach ($this->__data['cart'] as $key => $item) {
                    $orderDetails[]=[
                        'order_id'=>$orderId,
                        'item_details_id'=>$key,
                        'quantity'=>$item['current_quantity'],
                        'discount'=>$item['discout_item'],
                        'price'=>$item['price'],
                        'created_at'=>$now,
                        'updated_at'=>$now
                    ];

                    $itemDetail = ItemDetailModel::find($key);
                    $quantity = $itemDetail->quantity - (int)$item['current_quantity'];
                    if ($quantity >= 0) {
                        $itemDetail->update(['quantity' => $itemDetail->quantity - (int)$item['current_quantity']]);
                    }
                    else{
                        if ($quantity < 0) {
                            Session::forget('cart');
                            Session::put('msg', 'Error');
                            return redirect('/');
                        }
                    }
                }
                OderItemModel::insert($orderDetails);
            }

            // mail
            $name = $this->__data['info']->first_name.' '.$this->__data['info']->last_name;
            if ($this->__data['info']->gender == 1) {
                $gender = "Mr";
            }else{
                $gender = "Ms/Mrs";
            }

            $message = [
                'type' => 'Thông Báo Đơn Đặt Hàng',
                'info' => $this->__data['info'],
                'thanks' => "Thank $gender $name for your purchase. We will deliver the products as soon as possible",
                'order' => $order,
                'listCart' => Session::get("cart"),
            ];
            SendEmail::dispatch($message, $this->__data['info']['email'])->delay(now()->addMinute(1));

            Session::forget('cart');
            Session::put('msg', 'Order succsess. Waiting for confirmation');
            return redirect('/');
        }
    }
}
