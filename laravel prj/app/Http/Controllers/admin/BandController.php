<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemDetailModel;
use App\Models\BrandModel;
use App\Models\ImageModel;
use App\Http\Requests\BrandRequest;
use Session;
use Redirect;

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
                $this->__value = "Cập nhật id: $id thành công";
            }else{
                $this->__key = 'error';
                $this->__value = "Cập nhật id: $id không thành công, lỗi CSDL";
            }
        }else{
            $this->__key = 'error';
            $this->__value = "Không tìm thấy id: $id";
        }
        return redirect('admin-mo/brand/index')->with($this->__key, $this->__value);
    }

    public function create()
    {
        return view('admin/pages/brands/create');
    }
    
    public function store(BrandRequest $request)
    {
        $brand = new BrandModel;
        $brand->name = $request->name;
        if ($brand ->save()) {
            return redirect('admin-mo/brand/index')->with('success', 'Tạo thành công');
        }else{
            return redirect()->back()->with('error', 'Không lưu được data, lỗi CSDL');
        }
    }

    public function delete($id)
    {
        $brand = BrandModel::deleteBand($id);
        return Redirect::back()->with('success', "Xóa id: $id và các relationship thành công");;
    }
}
