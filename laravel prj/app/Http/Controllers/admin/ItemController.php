<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use App\Models\BrandModel;
use App\Models\ItemTypesModel;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $brands = BrandModel::all();
        $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
            return $q->where('images.default_img', '=', 1);
        }])->get();
        return view('admin/pages/items/index',compact('items','brands'));
    }

    public function create(Request $request)
    {
        return view('admin/pages/items/create');
    }
    // public function create(Request $request)
    // {
    //     if($request->hasfile('img'))
    //     {
    //       $file = $request->file('img');
    //       $extension = $file->getClientOriginalExtension();
    //       $filename =time().'.'.$extension;
    //       $file->move('admin/images/', $filename);
    //     }

    //     $data = ItemModel::create([
    //         'item_type_id' => $request->item_type_id,
    //         'shop_id' => $request->shop_id,
    //         'img' => $filename,
    //         'name' => $request->name,
    //         'quantity' => $request->quantity,
    //         'price' => $request->price,
    //         'feature' => $request->feature,
    //         'discout_item' => $request->discout_item
    //     ]);

    //     return $data;
    // }

    public function getView($id)
    {
        $data = ItemModel::find($id);
        $img = $data->img;
        return view('admin/pages/test',compact('img'));
    }

    public function ajaxGetTypeByBrandId(Request $request)
    {
        $brandId = $request->brandSearch;
        $typeId = $request->typeSearch;
        $html = '';
        if ($brandId == 0 && $typeId == 0) {
            // $html .='<option value="0">All</option>';
            return response($html, 404)
            ->header('Content-Type', 'text/plain');
        }else{
            $html .='<option value="0">All</option>';
            $brand = BrandModel::with('type')->find($brandId);
            foreach ($brand->type as $key => $type) {
                $html .= '<option value=\''.$type->id.'\'>'.$type->name.'</option>';
            }
        }
        return response($html, 200)
        ->header('Content-Type', 'text/plain');
    }
}
