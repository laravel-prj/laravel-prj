<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImageModel;
use App\Models\ItemModel;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\ImageDefaultRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    public function index($itemId)
    {
        // $q->orderBy('images.default_img', 'DESC');
        $item = ItemModel::find($itemId);
        $images = ImageModel::where('item_id', $itemId)->orderBy('default_img', 'DESC')->get();
        return view('admin/pages/images/index',compact('images','itemId','item'));
    }

    public function createMul($itemId, Request $request)
    {
        $item = ItemModel::find($itemId);
        return view('admin/pages/images/create-mul');
    }

    public function storeMul($itemId, Request $request)
    {
        $images = $request->file('files');

        if ($request->hasFile('files')){
            foreach ($images as $item){
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $item->getClientOriginalName();
                $item->move('customer/img/', $imageName);

                $imagesData = new ImageModel;
                $imagesData->item_id = $itemId;
                $imagesData->img =  $imageName;
                $imagesData->default_img = 0;
                $imagesData->save();
            }
            return redirect('admin-mo/images/item/'.$itemId)->with('success','Add Images');
        }
    }

    public function create($itemId, Request $request)
    {
        $item = ItemModel::find($itemId);
        $hasDefault = ImageModel::where([['item_id', $itemId],['default_img',1]])->first();
        if (isset($hasDefault) && !empty($hasDefault)) {
            $flg = false;
        }else{
            $flg = true;
        }
        return view('admin/pages/images/create',compact('itemId', 'flg'));
    }

    public function store($itemId, ImageRequest $request)
    {
        $image = $request->file('file');
        if ($request->hasFile('file')) {
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $imageName = $time . '-' . $image->getClientOriginalName();
            $image->move('customer/img/', $imageName);

            $imageData = new ImageModel;
            $imageData->item_id = $itemId;
            $imageData->img = $imageName;
            $imageData->default_img = ($request->default_img) ? $request->default_img : 0 ;
            $imageData->save();
            // edirect('admin-mo/item/index')
            return redirect('admin-mo/images/item/'.$itemId)->with('success','Add Image success');
        }else{
            return redirect()->back()->withErrors('Please add image');
        }
    }

    public function edit($itemId, $imageId)
    {
        $item = ItemModel::find($itemId);
        $hasDefault = ImageModel::where([['item_id', $itemId],['default_img',1]])->first();
        if (isset($hasDefault) && !empty($hasDefault)) {
            $flg = false;
        }else{
            $flg = true;
        }
        $img = ImageModel::find($imageId);
        if ($img) {
            return view('admin/pages/images/update',compact('img','flg','item'));
        }else{
            return redirect()->back()->withErrors('Id not found');
        }
    }

    public function update($itemId, $imageId, ImageDefaultRequest $request)
    {
        $img = ImageModel::find($imageId);
        if ($img) {
            $img->update([
                'default_img'=>$request->default_img
            ]);
            return redirect('admin-mo/images/item/'.$itemId)->with('success','Update Image success');
        }else{
            return redirect()->back()->withErrors('Id not found');
        }
    }


    public function getUpdateImg($itemId, $imgId, Request $request)
    {
        $img = ImageModel::find($imgId);
        if ($img) {
            return view('admin/pages/images/update-img',compact('img','itemId'));
        }else{
            return redirect()->back()->withErrors('Image not found');
        }
    }

    public function postUpdateImg($itemId, $imageId, ImageRequest $request)
    {
        $img = ImageModel::find($imageId);
        if ($img) {
            $image = $request->file('file');
            if ($request->hasFile('file')) {
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $image->getClientOriginalName();
                $image->move('customer/img/', $imageName);

                $file_path = public_path().'\customer\img\\'.$img->img;
                File::delete($file_path);

                // $img->img = $imageName;
                $default_img = ($request->default_img) ? $request->default_img : 0 ;
                $img->update([
                    'img'=>$imageName
                ]);
            }
            return redirect('admin-mo/images/item/'.$itemId)->with('success','Update Image succes');
        }else{
            return redirect()->back()->withErrors('Id not found');
        }
    }

    public function delete($imageId)
    {
        $image = ImageModel::find($imageId);
        if ($image) {
            $file_path = public_path().'\customer\img\\'.$image->img;
            File::delete($file_path);
            $image->delete();
            return redirect()->back()->with('success', "Delete id: $imageId success");
        }else{
            return redirect()->back()->withErrors("image not found");
        }
    }

}
