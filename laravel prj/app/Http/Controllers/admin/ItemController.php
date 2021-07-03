<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use App\Models\BrandModel;
use App\Models\ItemTypesModel;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

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

    public function store(Request $request)
    {
        $images = $request->file('files');
        if ($request->hasFile('files')){
            foreach ($images as $item){
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $item->getClientOriginalName();
                $item->move('customer/img/', $imageName);
                $arr[] = $imageName;
            }
            $image = implode(",", $arr);
        }
        else{
            $image = '';
        }
    }

    // public function test(Request $request)
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
        $html = '';
        if ($brandId == 0) {
            $html .='<option value="0">All</option>';
        }else{
            $html .='<option value="0">All</option>';
            $types = ItemTypesModel::whereHas('item')->where('brand_id',$brandId)->get();
            foreach ($types as $key => $type) {
                $html .= '<option value=\''.$type->id.'\'>'.$type->name.'</option>';
            }
        }
        return response($html, 200)
        ->header('Content-Type', 'text/plain');
    }

    public function ajaxSearchBrandById(Request $request)
    {
        $brandId = $request->brandSearch;
        $html = '';
        $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
            return $q->where('images.default_img', '=', 1);
        }])->get();

        if ($brandId == 0) {
            foreach ($items as $key => $item) {
                $brandName = $item['type']['brand']['name'];
                $typeName = $item['type']['name'];
                $itemName = $item['name'];
                $itemImage =  $item['images'][0]['img'];

                $itemPrice =  $item['price'];
                $itemFeature =  $item['feature'];
                $itemDiscount =  $item['discout_item'];
                $rootURL = asset('');
                $html .="
    <tr>
        <td>$brandName</td>
        <td>$typeName</td>
        <td>$itemName</td>";

                        if ($itemImage) {
                            $html .='
        <td><img src="'.$rootURL."customer/img/$itemImage".'"
            alt="" width="50px" height="50px">
        </td>';
                        } else {
                            $html .= `
        <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
        width="50px" height="50px">
        </td>`;
                        }
                        $html .="<td>$itemPrice</td>";

                        if ($itemFeature == 1) {
                            $html .='
        <td>
            <b>hot</b>
        </td>';
                        } else {
                            $html .='
        <td>normal</td>';
                        }
                        $html .='
        <td>'.$itemDiscount.'%</td>
        <td>
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt"></i>Edit
            </a>
            <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                <i class="fas fa-trash"></i>Delete
            </a>
        </td>
    </tr>';
            }
        }else{
            foreach ($items as $key => $item) {
                if (!($item['type']['brand']['id'] == $brandId)) {
                    unset($items[$key]);
                }else{
                    $brandName = $item['type']['brand']['name'];
                    $typeName = $item['type']['name'];
                    $itemName = $item['name'];
                    $itemImage =  $item['images'][0]['img'];

                    $itemPrice =  $item['price'];
                    $itemFeature =  $item['feature'];
                    $itemDiscount =  $item['discout_item'];
                    $rootURL = asset('');
                    $html .="
<tr>
    <td>$brandName</td>
    <td>$typeName</td>
    <td>$itemName</td>";

                    if ($itemImage) {
                        $html .='
    <td><img src="'.$rootURL."customer/img/$itemImage".'"
        alt="" width="50px" height="50px">
    </td>';
                    } else {
                        $html .= `
    <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
    width="50px" height="50px">
    </td>`;
                    }
                    $html .="<td>$itemPrice</td>";

                    if ($itemFeature == 1) {
                        $html .='
    <td><b>hot</b></td>';
                    } else {
                        $html .='
    <td>normal</td>';
                    }
                    $html .='
    <td>'.$itemDiscount.'%</td>
    <td>
        <a class="btn btn-info btn-sm" href="#">
            <i class="fas fa-pencil-alt"></i>Edit
        </a>
        <a class="btn btn-danger btn-sm" href="javascript:void(0);">
            <i class="fas fa-trash"></i>Delete
        </a>
    </td>
</tr>';
                }
            }
        }
        return response($html, 200)
        ->header('Content-Type', 'text/plain');
    }

    public function ajaxSearchTypeById(Request $request)
    {
        $typeId = $request->typeSearch;
        $brandId = $request->brandSearch;
        $html = '';
        $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
            return $q->where('images.default_img', '=', 1);
        }]);
        // if (count($items) < 0) {
        //     return response($html, 404)
        //     ->header('Content-Type', 'text/plain');
        // }

        if ($typeId == 0) {
            $items = $items->get();
            foreach ($items as $key => $item) {
                if (!($item['type']['brand']['id'] == $brandId)) {
                    unset($items[$key]);
                }else{
                    $brandName = $item['type']['brand']['name'];
                    $typeName = $item['type']['name'];
                    $itemName = $item['name'];
                    $itemImage =  $item['images'][0]['img'];
                    $itemPrice =  $item['price'];
                    $itemFeature =  $item['feature'];
                    $itemDiscount =  $item['discout_item'];
                    $rootURL = asset('');
                    $html .="
        <tr>
            <td>$brandName</td>
            <td>$typeName</td>
            <td>$itemName</td>";

                            if ($itemImage) {
                                $html .='
            <td><img src="'.$rootURL."customer/img/$itemImage".'"
                alt="" width="50px" height="50px">
            </td>';
                            } else {
                                $html .= `
            <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
            width="50px" height="50px">
            </td>`;
                            }
                            $html .="<td>$itemPrice</td>";

                            if ($itemFeature == 1) {
                                $html .='
            <td>
                <b>hot</b>
            </td>';
                            } else {
                                $html .='
            <td>normal</td>';
                            }
                            $html .='
            <td>'.$itemDiscount.'%</td>
            <td>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                    <i class="fas fa-trash"></i>Delete
                </a>
            </td>
        </tr>';
                }
            }
        }else{
            $items = $items->where('item_type_id',$typeId)->get();

            foreach ($items as $key => $item) {

                $brandName = $item['type']['brand']['name'];
                $typeName = $item['type']['name'];
                $itemName = $item['name'];
                $itemImage =  $item['images'][0]['img'];

                $itemPrice =  $item['price'];
                $itemFeature =  $item['feature'];
                $itemDiscount =  $item['discout_item'];
                $rootURL = asset('');
                $html .="
    <tr>
        <td>$brandName</td>
        <td>$typeName</td>
        <td>$itemName</td>";

                        if ($itemImage) {
                            $html .='
        <td><img src="'.$rootURL."customer/img/$itemImage".'"
            alt="" width="50px" height="50px">
        </td>';
                        } else {
                            $html .= `
        <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
        width="50px" height="50px">
        </td>`;
                        }
                        $html .="<td>$itemPrice</td>";

                        if ($itemFeature == 1) {
                            $html .='
        <td>
            <b>hot</b>
        </td>';
                        } else {
                            $html .='
        <td>normal</td>';
                        }
                        $html .='
        <td>'.$itemDiscount.'%</td>
        <td>
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt"></i>Edit
            </a>
            <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                <i class="fas fa-trash"></i>Delete
            </a>
        </td>
    </tr>';
            }
        }
        return response($html, 200)
        ->header('Content-Type', 'text/plain');
    }

    // ->where('loan_officers', 'like', '%' . $officerId . '%')
    public function ajaxSearchName(Request $request)
    {
        $html = '';
        $brandId = $request->brandSearch;
        $typeId = $request->typeSearch;
        $name = $request->nameSearch;
        $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
            return $q->where('images.default_img', '=', 1);
        }])->where('name', 'like', '%' . $name . '%')->get();
        if (count($items) < 1) {
            return response($html, 404)
            ->header('Content-Type', 'text/plain');
        }
        if ($brandId == 0 && $typeId == 0) {
            # search all + name
            $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
                return $q->where('images.default_img', '=', 1);
            }])->where('name', 'like', '%' . $name . '%')->get();
            foreach ($items as $key => $item) {
                $brandName = $item['type']['brand']['name'];
                $typeName = $item['type']['name'];
                $itemName = $item['name'];
                $itemImage =  $item['images'][0]['img'];
                $itemPrice =  $item['price'];
                $itemFeature =  $item['feature'];
                $itemDiscount =  $item['discout_item'];
                $rootURL = asset('');
                $html .="
<tr>
    <td>$brandName</td>
    <td>$typeName</td>
    <td>$itemName</td>";

                    if ($itemImage) {
                        $html .='
    <td><img src="'.$rootURL."customer/img/$itemImage".'"
        alt="" width="50px" height="50px">
    </td>';
                    } else {
                        $html .= `
    <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
    width="50px" height="50px">
    </td>`;
                    }
                    $html .="<td>$itemPrice</td>";

                    if ($itemFeature == 1) {
                        $html .='
    <td>
        <b>hot</b>
    </td>';
                    } else {
                        $html .='
    <td>normal</td>';
                    }
                    $html .='
    <td>'.$itemDiscount.'%</td>
    <td>
        <a class="btn btn-info btn-sm" href="#">
            <i class="fas fa-pencil-alt"></i>Edit
        </a>
        <a class="btn btn-danger btn-sm" href="javascript:void(0);">
            <i class="fas fa-trash"></i>Delete
        </a>
    </td>
</tr>';
            }
        }else{
            if ($brandId !== 0 && $typeId == 0) {
                # search brand + name
                $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
                    return $q->where('images.default_img', '=', 1);
                }])->where('name', 'like', '%' . $name . '%')->get();
                foreach ($items as $key => $item) {
                    if (!($item['type']['brand']['id'] == $brandId)) {
                        unset($items[$key]);
                    }else{
                        $brandName = $item['type']['brand']['name'];
                        $typeName = $item['type']['name'];
                        $itemName = $item['name'];
                        $itemImage =  $item['images'][0]['img'];
                        $itemPrice =  $item['price'];
                        $itemFeature =  $item['feature'];
                        $itemDiscount =  $item['discout_item'];
                        $rootURL = asset('');
                        $html .="
        <tr>
            <td>$brandName</td>
            <td>$typeName</td>
            <td>$itemName</td>";

                            if ($itemImage) {
                                $html .='
            <td><img src="'.$rootURL."customer/img/$itemImage".'"
                alt="" width="50px" height="50px">
            </td>';
                            } else {
                                $html .= `
            <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
            width="50px" height="50px">
            </td>`;
                            }
                            $html .="<td>$itemPrice</td>";

                            if ($itemFeature == 1) {
                                $html .='
            <td>
                <b>hot</b>
            </td>';
                            } else {
                                $html .='
            <td>normal</td>';
                            }
                            $html .='
            <td>'.$itemDiscount.'%</td>
            <td>
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                    <i class="fas fa-trash"></i>Delete
                </a>
            </td>
        </tr>';
                    }
                }
                // unset !brandId
            }
            if ($typeId !== 0) {
                # search brand + type + name
                $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
                    return $q->where('images.default_img', '=', 1);
                }])->where([['item_type_id', $typeId], ['name', 'like', '%' . $name . '%']])->get();
                foreach ($items as $key => $item) {
                    $brandName = $item['type']['brand']['name'];
                    $typeName = $item['type']['name'];
                    $itemName = $item['name'];
                    $itemImage =  $item['images'][0]['img'];
                    $itemPrice =  $item['price'];
                    $itemFeature =  $item['feature'];
                    $itemDiscount =  $item['discout_item'];
                    $rootURL = asset('');
                    $html .="
    <tr>
        <td>$brandName</td>
        <td>$typeName</td>
        <td>$itemName</td>";

                        if ($itemImage) {
                            $html .='
        <td><img src="'.$rootURL."customer/img/$itemImage".'"
            alt="" width="50px" height="50px">
        </td>';
                        } else {
                            $html .= `
        <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
        width="50px" height="50px">
        </td>`;
                        }
                        $html .="<td>$itemPrice</td>";

                        if ($itemFeature == 1) {
                            $html .='
        <td>
            <b>hot</b>
        </td>';
                        } else {
                            $html .='
        <td>normal</td>';
                        }
                        $html .='
        <td>'.$itemDiscount.'%</td>
        <td>
            <a class="btn btn-info btn-sm" href="#">
                <i class="fas fa-pencil-alt"></i>Edit
            </a>
            <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                <i class="fas fa-trash"></i>Delete
            </a>
        </td>
    </tr>';
                }
            }
        }
        return response($html, 200)
        ->header('Content-Type', 'text/plain');
    }
}
