<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OderModel;
use App\Models\CustomerModel;
use Illuminate\Http\Request;
use App\Jobs\SendEmail;
Use \Carbon\Carbon;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OderModel::with('customer')->orderBy('status','ASC')->get();
        return view('admin/pages/orders/index', compact('orders'));
    }

    public function ajaxUpdateStatusOrder(Request $request)
    {
        $orderId = $request->orderId;
        $status = $request->status;
        $now = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d h:i:s');

        $order = OderModel::find($orderId);
        if ($order) {
            if ($status == 0) {
                $order->update([
                    'status' => $status
                ]);
                $order->customer_id = $order->customer_id;
                $order->order_date = $order->order_date;
                $order->status = $order->status;
                $order->delivery_time = NULL;
                $order->total_price = $order->total_price;
                $order->total_discount = $order->total_discount;
                $order->total_item = $order->total_item;
                $order->save();
            }else{
                if ($status == 1) {
                    $order->update([
                        'status' => $status
                    ]);
                    $order->customer_id = $order->customer_id;
                    $order->order_date = $order->order_date;
                    $order->status = $order->status;
                    $order->delivery_time = $now;
                    $order->total_price = $order->total_price;
                    $order->total_discount = $order->total_discount;
                    $order->total_item = $order->total_item;
                    $order->save();

                    $customer = CustomerModel::find($order->customer_id);
                    // mail
                    $name = $customer->first_name.' '.$customer->last_name;
                    if ($customer->gender == 1) {
                        $gender = "Anh";
                    }else{
                        $gender = "Chị";
                    }

                    $message = [
                        'flag' => true,
                        'type' => 'Đơn Hàng Đã Được Phê Duyệt',
                        'thanks' => "Đơn hàng số $order->id của bạn đang trong quá trình vận chuyển, Cảm ơn $gender $name đã mua hàng."
                    ];
                    SendEmail::dispatch($message, $customer->email)->delay(now()->addMinute(1));
                }else{
                    $order->update([
                        'status' => $status
                    ]);
                    $order->customer_id = $order->customer_id;
                    $order->order_date = $order->order_date;
                    $order->status = $order->status;
                    $order->delivery_time = NULL;
                    $order->total_price = $order->total_price;
                    $order->total_discount = $order->total_discount;
                    $order->total_item = $order->total_item;
                    $order->save();
                }
            }
            $msg = $this->renderMsg($status);
            return response()->json(['success' => 'Changed Status Success', 'msg' => $msg], 200);
        }else{
            return response()->json(['error' => 'Order Not found'], 404);
        }
    }

    public function renderMsg($case)
    {
        switch ($case) {
            case 0:
                return "Changed To Waiting Status";
            case 1:
                return "Changed To Approve Status";
            case 2:
                return "Changed To Reject Status";
        }
    }

    public function view($id)
    {
        $order = OderModel::with('orderItem.itemDetail.item')->find($id);
        $order_item = $order->orderItem;
        $customer = CustomerModel::find($order->customer_id);
        return view('admin/pages/orders/view', compact('customer', 'order', 'order_item'));
    }

    public function delete($id)
    {
        $order = OderModel::find($id);
        if ($order) {
            $order->delete();
            return redirect('admin-mo/order/index')->with('success', "Xoa thanh cong");
        }else{
            return redirect()->back()->withErrors('Khong Tim Thay Id');
        }
    }

    public function renderBody($list=[])
    {
        $html='';
        $rootURL = asset('');
        // href="'.$rootURL."admin-mo/itemType/update/$item->id".'"
        foreach ($list as $key => $order) {
            $html .= '<tr>';
            $html .= "<td>$order->id</td>";
            $html .= '<td>'.$order->customer->first_name.' '.$order->customer->last_name.'</td>';
            $html .= '<td class="project-actions text-right" style="text-align: left !important;">
                    <iframe id="gifLoad'.$order->id.' src="https://giphy.com/embed/Wodg2kOPJRLbw3Pfjh" width="50" height="50" frameBorder="0" class="giphy-embed" allowFullScreen style="display: none"></iframe>
                        <select id="status'.$order->id.'" class="form-control" name="status" onchange="return onChangeStatus(this,'.$order->id.');">';
                        if ($order->status == 0) {
                            $html .= '<option value="0" selected>Waiting</option>';
                        }else{
                            $html .= '<option value="0">Waiting</option>';
                        }
                        if ($order->status == 1) {
                            $html .= '<option value="1" selected>Approve</option>';
                        }else{
                            $html .= '<option value="1">Approve</option>';
                        }
                        if ($order->status == 2) {
                            $html .= '<option value="2" selected>Reject</option>';
                        }else{
                            $html .= '<option value="2">Reject</option>';
                        }
            $html .= '</select></td>';
            $html .= '<td>'.$order->order_date.'</td>';
            $html .= '<td>'.$order->total_price.'<b>$</b></td>';
            $html .= '<td><a href="'.$rootURL."admin-mo/order/view/$order->id".' type="button" class="btn btn-primary">View</a>';
            $html .= '<a href="javascript:void(0);" type="button" class="btn btn-danger" onclick="return onDeleteOrder('.$order->id.');">Delete</a>';
            $html .= '</td>';
            $html .= '</tr>';
        }
        return $html;
    }

    public function ajaxSearchOrder(Request $request)
    {
        $status = $request->status;
        if ($status == 4) {
            $orders = OderModel::orderBy('order_date', 'desc')->get();
        }else{
            $orders = OderModel::where('status', $status)->orderBy('order_date', 'desc')->get();
        }
        return $this->renderBody($orders);
    }
}
