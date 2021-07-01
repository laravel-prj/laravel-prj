<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $listItem = ItemModel::with('type.brand','item_details','images')->get();
        return ($listItem);
        return view('admin/pages/items/index');
    }
    public function create(Request $request)
    {
        if($request->hasfile('img'))
        {
          $file = $request->file('img');
          $extension = $file->getClientOriginalExtension();
          $filename =time().'.'.$extension;
          $file->move('admin/images/', $filename);
        }

        $data = ItemModel::create([
            'item_type_id' => $request->item_type_id,
            'shop_id' => $request->shop_id,
            'img' => $filename,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'feature' => $request->feature,
            'discout_item' => $request->discout_item
        ]);

        return $data;
    }

    public function getView($id)
    {
        $data = ItemModel::find($id);
        $img = $data->img;
        return view('admin/pages/test',compact('img'));
    }
}
