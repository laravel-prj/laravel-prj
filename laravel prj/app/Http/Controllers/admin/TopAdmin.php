<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ItemTypesModel;
use App\Models\ItemDetailModel;
use App\Models\ImageModel;
use App\Models\CustomerModel;
use App\Models\ShopModel;
use App\Models\ItemModel;
use App\Models\OderModel;
use App\Models\OderItemModel;
use App\Models\User;
use App\Models\BrandModel;
use Auth;


class TopAdmin extends Controller
{

    public function testGet($id)
    {
        $listCustomer = CustomerModel::with('order.orderItem.item')->find($id);
        return $listCustomer;
    }

    public function testGetAll()
    {
        $listCustomer = CustomerModel::all();
        return $listCustomer;
    }

    public function testPost(Request $request)
    {
        $data = CustomerModel::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return $data;
    }

    public function testPut($id, Request $request)
    {
        $data = CustomerModel::find($id);
        if ($data) {
            $data->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            return $data;
        }else{
            return "k tim thay";
        }
    }

    public function testDelete($id)
    {
        $data = CustomerModel::find($id);
        if ($data) {
            $data->delete();
            return $data;
        }else{
            return "k tim thay";
        }
    }

    public function getCreateItem()
    {
        $shops = ShopModel::all();
        $types = ItemTypesModel::with('producerOrderBy')->get();

        return view('admin/pages/addproduct', compact('shops', 'types'));
    }

    public function postCreateItem(Request $request)
    {
        return $request;
    }

    public function item()
    {


        $data = ItemModel::with('shops')->with('type.producer')->get();
        return view('admin/pages/projects', compact('data'));

    }
    public function index()
    {
        return view('admin/pages/index');
    }
    public function admin(){
        $data= User::all();
        return view('admin/pages/admin-mng', compact('data'));
    }
    public function customer(){
        $data= CustomerModel::all();
        return view('admin/pages/customer-mng', compact('data'));
    }

    public function ajaxLoadChart(Request $request)
    {
        $currentMonth = $request->month;
        $itemNum; $hotNum; $normalNum; $priceNum;

        $orders = OderModel::whereMonth('created_at', '=', $currentMonth);
        $itemNum = count($orders->get());
        $hotNum = OderItemModel::with(['itemDetail.item' => function($q){
            return $q->where('feature', '=', 1);
        }])->whereMonth('created_at', '=', $currentMonth)->get();
        $contHotNum =0;
        $contNorlmalNum =0;
        foreach ($hotNum as $key => $value) {
            if (isset($value['itemDetail']['item'])) {
                $contHotNum += 1;
            }else{
                $contNorlmalNum += 1;
            }
        }
        $priceNum = $orders->sum('total_price');
        $data =['itemNum'=>$itemNum, 'hotNum'=>$contHotNum, 'normalNum'=>$contNorlmalNum, 'priceNum'=>$priceNum];
        return response()->json($data, 200);
    }

    public function ajaxLoadChart2(Request $request)
    {
        $currentMonth = $request->month;$priceNum;
        $orders = OderModel::whereMonth('created_at', '=', $currentMonth);
        $priceNum = $orders->sum('total_price');
        $discountNum = $orders->sum('total_discount');
        $data =['priceNum'=>$priceNum, 'discountNum'=>$discountNum];
        return response()->json($data, 200);
    }
}
