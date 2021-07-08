<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ImageModel;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class ImageController extends Controller
{
    public function index($itemId)
    {
        // $q->orderBy('images.default_img', 'DESC');
        $images = ImageModel::where('item_id', $itemId)->orderBy('default_img', 'DESC')->get();
        return view('admin/pages/images/index',compact('images','itemId'));
    }

    public function createMul($itemId, Request $request)
    {
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
            return redirect('admin-mo/images/item/'.$itemId)->with('success','Them Images thanh cong');
        }
    }

    public function create($itemId, Request $request)
    {
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
            return redirect('admin-mo/images/item/'.$itemId)->with('success','Them Image thanh cong');
        }else{
            return redirect()->back()->withErrors('vui long nhap image');
        }
    }

    public function edit($itemId, $imageId)
    {
        $hasDefault = ImageModel::where([['item_id', $itemId],['default_img',1]])->first();
        if (isset($hasDefault) && !empty($hasDefault)) {
            $flg = false;
        }else{
            $flg = true;
        }
        $img = ImageModel::find($imageId);
        if ($img) {
            return view('admin/pages/images/update',compact('img','flg'));
        }else{
            return redirect()->back()->withErrors('Khong tim thay Id');
        }
    }

    public function update($itemId, $imageId, ImageRequest $request)
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
                    'img'=>$imageName,
                    'default_img'=>$default_img
                ]);
            }
            return redirect('admin-mo/images/item/'.$itemId)->with('success','Them Image thanh cong');
        }else{
            return redirect()->back()->withErrors('Khong tim thay Id');
        }
    }

    public function delete($imageId)
    {
        $image = ImageModel::find($imageId);
        if ($image) {
            $file_path = public_path().'\customer\img\\'.$image->img;
            File::delete($file_path);
            $image->delete();
            return redirect()->back()->with('success', "Xóa id: $imageId thành công");
        }else{
            return redirect()->back()->withErrors("K tim thay image"); 
        }
    }
}
