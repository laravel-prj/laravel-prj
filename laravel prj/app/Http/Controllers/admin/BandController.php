<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemDetailModel;
use App\Models\BrandModel;
use App\Models\ImageModel;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\ImageRequest;
use Session;
use Redirect;
use File;

class BandController extends Controller
{
    private $__key ='';
    private $__value='';

    public function index()
    {   $brand = BrandModel::all();
        return view('admin/pages/brands/index', compact('brand'));
    }

    public function edit($id)
    {
        $brand = BrandModel::find($id);
        return view('admin/pages/brands/edit', compact('brand'));
    }

    public function update($id, BrandRequest $request)
    {
        if ($id) {
            $brand = BrandModel::find($id);
            $brand->name = $request->get('name');
            if ($brand->save()) {
                $this->__key = 'success';
                $this->__value = "Update id: $id success";
            }else{
                $this->__key = 'error';
                $this->__value = "Update id: $id fail, CSDL error";
            }
        }else{
            $this->__key = 'error';
            $this->__value = " not found: $id";
        }
        return redirect('admin-mo/brand/index')->with($this->__key, $this->__value);
    }

    public function create()
    {
        return view('admin/pages/brands/create');
    }

    public function store(BrandRequest $request)
    {
        $image = $request->file('file');
        if ($request->hasFile('file')) {
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $imageName = $time . '-' . $image->getClientOriginalName();
            $image->move('customer/img/', $imageName);

            $brand = new BrandModel;
            $brand->name = $request->name;
            $brand->img = $imageName;
            if ($brand ->save()) {
                return redirect('admin-mo/brand/index')->with('success', 'success');
            }else{
                return redirect()->back()->with('error', 'cannot save data, CSDL error');
            }
        }else{
            return redirect()->back()->withErrors('Please add image');
        }

    }

    public function delete($id)
    {
        $brand = BrandModel::deleteBand($id);
        return Redirect::back()->with('success', "Delete id: $id and relationships successfully");
    }

    public function editImage($brandId, Request $request)
    {
        $brand = BrandModel::find($brandId);
        return view('admin/pages/brands/update-image', compact('brand'));
    }

    public function updateImage($brandId, ImageRequest $request)
    {
        $brand = BrandModel::find($brandId);
        if ($brand) {
            $image = $request->file('file');
            if ($request->hasFile('file')) {
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $image->getClientOriginalName();
                $image->move('customer/img/', $imageName);

                $file_path = public_path().'\customer\img\\'.$brand->img;
                File::delete($file_path);

                $brand->update([
                    'img'=>$imageName
                ]);
            }
            return redirect("/admin-mo/brand/update/$brandId")->with('success', 'Update image success');
        }else{
            return redirect()->back()->withErrors('Id not found');
        }
    }
}
