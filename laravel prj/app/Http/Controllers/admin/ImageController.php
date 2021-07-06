<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImageModel;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function edit($itemId)
    {
        $imageDefault = ImageModel::where([['item_id', $itemId],['default_img',1]])->first();
        $images = ImageModel::where([['item_id', $itemId],['default_img',0]])->get();
        return view('admin/pages/images/index',compact('images','imageDefault'));
    }

    public function updateImages(Request $request)
    {
        return $request;
    }
}
