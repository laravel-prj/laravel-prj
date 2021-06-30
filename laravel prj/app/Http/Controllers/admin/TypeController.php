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

    public function update($id, Request $request)
    {
        if ($id) {
            $type = ItemTypesModel::find($id);
            $type->name = $request->get('name');
            $type->brand_id = $request->get('brand_id');
            $type->save();
        }
        return redirect('admin-mo/itemType/index');
    }

    public function getCreate()
    {
        $brand = BrandModel::all();
        return view('admin/pages/itemType/create', compact('brand'));
    }

    public function create(Request $request)
    {
        $brand = BrandModel::all();
        $type = new ItemTypesModel;
        $type->brand_id = $request->brand_id;
        $type->name = $request->name;
        $type ->save();
        return redirect('admin-mo/itemType/index');
    }

    public function delete($id)
    {
        $type = ItemTypesModel::deleteType($id);
        return Redirect::back();
    }
}
