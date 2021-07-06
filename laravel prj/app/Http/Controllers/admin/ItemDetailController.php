<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use App\Models\BrandModel;
use App\Models\ShopModel;
use App\Models\ItemTypesModel;
use App\Models\ItemDetailModel;
use App\Models\ImageModel;
use App\Http\Requests\ItemDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemDetailController extends Controller
{
    public function index($id)
    {
        // items
        $itemDetails = ItemDetailModel::where('item_id', $id)->get();
        $item = ItemModel::with(['images' => function($q){
            return $q->orderBy('images.default_img', 'DESC');
        }])->find($id);
        // return $item;
        return view('admin/pages/itemDetails/index', compact('itemDetails','item'));
    }

    public function create($id)
    {
        $itemDetails = ItemDetailModel::where('item_id', $id)->get();
        $item = ItemModel::with(['images' => function($q){
            return $q->orderBy('images.default_img', 'DESC');
        }])->find($id);
        if ($item) {
            return view('admin/pages/itemDetails/create', compact('itemDetails','item'));
        }else{
            return redirect()->back();
        }
    }

    public function store(ItemDetailRequest $request)
    {
        $info = new ItemDetailModel;
        $info->item_id = $request->item_id;
        $info->size = $request->size;
        $info->quantity = $request->quantity;
        if ($info->save()) {
            return redirect('/admin-mo/itemDetail/item'.$request->item_id)->with('success', 'Tao Thanh Cong');
        }else {
            return redirect()->back()->withErrors("Khong Thanh Cong")->withInput();
        }
    }

    public function editDetail($itemId, $detailId)
    {
        $itemDetails = ItemDetailModel::where('item_id', $itemId)->get();
        $item = ItemModel::with(['images' => function($q){
            return $q->orderBy('images.default_img', 'DESC');
        }])->find($itemId);
        $detail = ItemDetailModel::find($detailId);
        if ($detail) {
            return view('admin/pages/itemDetails/info', compact('itemDetails','item','detail'));
        }else{
            return redirect()->back()->withErrors("Khong Tim Thay Detail");
        }
    }

    public function updateDetail($itemId, $detailId, ItemDetailRequest $request)
    {
        $detail = ItemDetailModel::find($detailId);
        if ($detail) {
            $detail->item_id = $request->item_id;
            $detail->size = $request->size;
            $detail->quantity = $request->quantity;
            if ($detail->save()) {
                return redirect('/admin-mo/itemDetail/item/'.$itemId)->with('success', 'Tao Thanh Cong');
            }else {
                return redirect()->back()->withErrors("Khong Thanh Cong")->withInput();
            }
        }else{
            return redirect()->back()->withErrors("Khong Tim Thay Detail");
        }
    }

    public function deleteDetail($detailId)
    {
        $detail = ItemDetailModel::find($detailId);
        if ($detail) {
            $detail->delete();
            return redirect()->back()->with('success', "Xóa id: $detailId thành công");
        }else{
            return redirect()->back()->withErrors("Khong Tim Thay Detail");
        }
    }
}
