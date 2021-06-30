<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemDetailModel;
use App\Models\BrandModel;
use App\Models\ImageModel;
use Session;
use Redirect;

class BandController extends Controller
{
    public function index()
    {   $brand = BrandModel::all();
        return view('admin/pages/brands/index', compact('brand'));
    }

    public function edit($id)
    {
        $brand = BrandModel::find($id);
        return view('admin/pages/brands/edit', compact('brand'));
    }

    public function update($id, Request $request)
    {
        if ($id) {
            $brand = BrandModel::find($id);
            $brand->name = $request->get('name');
            $brand->save();
        }
        return redirect('admin-mo/brand/index');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $brand = new BrandModel;
            $brand->name = $request->name;
            $brand ->save();
            return redirect('admin-mo/brand/index');
        }
        if ($request->isMethod('get')) {
            return view('admin/pages/brands/create');
        }
    }

    public function delete($id)
    {
        $brand = BrandModel::deleteBand($id);
        return Redirect::back();
    }
}
