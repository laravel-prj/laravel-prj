<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemDetailModel;
use App\Models\BrandModel;
use App\Models\ImageModel;
use App\Models\ItemTypesModel;
use App\Http\Requests\ItemTypeRequest;
use Session;
use Redirect;

class TypeController extends Controller
{
    private $__key ='';
    private $__value='';

    public function index()
    {   $type = ItemTypesModel::with('brand')->get();
        return view('admin/pages/itemType/index', compact('type'));
    }

    public function edit($id)
    {
        $brands = BrandModel::all();
        $type = ItemTypesModel::find($id);
        return view('admin/pages/itemType/edit', compact('type','brands'));
    }

    public function update($id, ItemTypeRequest $request)
    {
        if ($id) {
            $type = ItemTypesModel::find($id);
            $type->name = $request->get('name');
            $type->brand_id = $request->get('brand_id');
            if ($type->save()) {
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
        return redirect('admin-mo/itemType/index')->with($this->__key, $this->__value);
    }

    public function create()
    {
        $brand = BrandModel::all();
        return view('admin/pages/itemType/create', compact('brand'));
    }

    public function store(ItemTypeRequest $request)
    {
        try {
            $brand = BrandModel::all();
            $type = new ItemTypesModel;
            $type->brand_id = $request->brand_id;
            $type->name = $request->name;
            if ($type ->save()) {
                return redirect('admin-mo/itemType/index')->with('success', 'Tạo thành công');
            }else{
                return redirect()->back()->with('error', 'Không lưu được data, lỗi CSDL');
            }
        } catch (\Throwable $th) {
            return redirect()->back();
        }

    }

    public function delete($id)
    {
        $type = ItemTypesModel::deleteType($id);
        return Redirect::back()->with('success', "Xóa id: $id và các relationship thành công");
    }
}
