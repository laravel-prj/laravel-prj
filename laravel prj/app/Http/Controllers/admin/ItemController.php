<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ItemModel;
use App\Models\BrandModel;
use App\Models\ShopModel;
use App\Models\ItemTypesModel;
use App\Models\ImageModel;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\ItemUpdateRequest;

class ItemController extends Controller
{
    public function index()
    {
        $brands = BrandModel::whereHas('item')->get();
        $items = ItemModel::with('type.brand','item_details')->with(['images' => function($q){
            return $q->where('images.default_img', '=', 1);
        }])->get();
        return view('admin/pages/items/index',compact('items','brands'));
    }

    public function create(Request $request)
    {
        $brands = BrandModel::all();
        $types = ItemTypesModel::where('brand_id', $brands[0]['id'])->get();
        $currentUser = Auth::guard('loyal_admin')->user();
        $currentUserId = $currentUser->id;
        $shop = ShopModel::where('user_id', $currentUserId)->first();
        return view('admin/pages/items/create',compact('brands','types','shop'));
    }

    public function store(ItemRequest $request)
    {
        // $images = $request->file('files');
        // $image_default = $request->file('file');
        // $imageDefault;
        $itemData = ItemModel::create([
            'item_type_id' => $request->type,
            'shop_id' => $request->shop_id,
            'description' => $request->description,
            'name' => $request->name,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'feature' => $request->feature,
            'discout_item' => $request->discout_item
        ]);
        return redirect('admin-mo/item/index')->with('success', 'Tạo thành công');

        // if ($request->hasFile('files') && $request->hasFile('file')){
        //     foreach ($images as $item){
        //         $var = date_create();
        //         $time = date_format($var, 'YmdHis');
        //         $imageName = $time . '-' . $item->getClientOriginalName();
        //         $item->move('customer/img/', $imageName);
        //         $arr[] = $imageName;

        //         $imagesData = new ImageModel;
        //         $imagesData->item_id = $itemData->id;
        //         $imagesData->img =  $imageName;
        //         $imagesData->save();
        //     }
        //     $image = implode(",", $arr);

        //     $varDefault = date_create();
        //     $timeDefault = date_format($varDefault, 'YmdHis');
        //     $imageDefault = $timeDefault . '-' . $image_default->getClientOriginalName();
        //     $image_default->move('customer/img/', $imageDefault);

        //     $imageDefaultData = new ImageModel;
        //     $imageDefaultData->item_id = $itemData->id;
        //     $imageDefaultData->img =  $imageDefault;
        //     $imageDefaultData->default_img = 1;
        //     if ($imageDefaultData->save()) {
        //         return redirect('admin-mo/item/index')->with('success', 'Tạo thành công');
        //     }else{
        //         return redirect('admin-mo/item/index')->with('error', 'Co Loi Xay Ra');
        //     }
        // }
        // NOTE
        // $imagesData = ImageModel::createMany([
        //     [
        //         'item_type_id'=>$itemData->id,
        //         'img'=>$emailsettingstype->id,
        //         'created_at'=>'',
        //         'updated_at'=>'',

        //     ],
        //     [
        //         'name'=>'mail_port',
        //         'type'=>$emailsettingstype->id,
        //         'created_at'=>'',
        //         'updated_at'=>'',

        //     ],
        //     [
        //         'name'=>'mail_username',
        //         'type'=>$emailsettingstype->id,
        //         'created_at'=>'',
        //         'updated_at'=>'',
        //     ],
        // ]);
    }

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
        if (isset($request->flg) && !empty($request->flg)) {
            $types = ItemTypesModel::where('brand_id', $brandId)->get();
            foreach ($types as $key => $type) {
                if ($request->typeIdSearch == $type->id) {
                    $html .= '<option value=\''.$type->id.'\' selected>'.$type->name.'</option>';
                }else{
                    $html .= '<option value=\''.$type->id.'\'>'.$type->name.'</option>';
                }
            }
        }else{
            if ($brandId == 0) {
                $html .='<option value="0">All</option>';
            }else{
                $html .='<option value="0">All</option>';
                $types = ItemTypesModel::whereHas('item')->where('brand_id',$brandId)->get();
                foreach ($types as $key => $type) {
                    $html .= '<option value=\''.$type->id.'\'>'.$type->name.'</option>';
                }
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
            alt="" width="66.6666px" height="100px">
        </td>';
                        } else {
                            $html .= `
        <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
        width="66.6666px" height="100px">
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
            <a class="btn btn-success btn-sm" href="javascript:void(0);" onclick="return onAddInfo('.$item['id'].');">
                <i class="fas fa-pencil-alt"></i>Info
            </a>
            <a class="btn btn-info btn-sm" href="javascript:void(0);" onclick="return onEditItem('.$item['id'].');">
                <i class="fas fa-pencil-alt"></i>Edit
            </a>
            <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return onDeleteItem('.$item['id'].');">
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
        alt="" width="66.6666px" height="100px">
    </td>';
                    } else {
                        $html .= `
    <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
    width="66.6666px" height="100px">
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
        <a class="btn btn-success btn-sm" href="javascript:void(0);" onclick="return onAddInfo('.$item['id'].');">
            <i class="fas fa-pencil-alt"></i>Info
        </a>
        <a class="btn btn-info btn-sm" href="javascript:void(0);" onclick="return onEditItem('.$item['id'].');">
            <i class="fas fa-pencil-alt"></i>Edit
        </a>
        <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return onDeleteItem('.$item['id'].');">
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
                alt="" width="66.6666px" height="100px">
            </td>';
                            } else {
                                $html .= `
            <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
            width="66.6666px" height="100px">
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
                <a class="btn btn-success btn-sm" href="javascript:void(0);" onclick="return onAddInfo('.$item['id'].');">
                    <i class="fas fa-pencil-alt"></i>Info
                </a>
                <a class="btn btn-info btn-sm" href="javascript:void(0);" onclick="return onEditItem('.$item['id'].');">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return onDeleteItem('.$item['id'].');">
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
            alt="" width="66.6666px" height="100px">
        </td>';
                        } else {
                            $html .= `
        <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
        width="66.6666px" height="100px">
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
            <a class="btn btn-success btn-sm" href="javascript:void(0);" onclick="return onAddInfo('.$item['id'].');">
                <i class="fas fa-pencil-alt"></i>Info
            </a>
            <a class="btn btn-info btn-sm" href="javascript:void(0);" onclick="return onEditItem('.$item['id'].');">
                <i class="fas fa-pencil-alt"></i>Edit
            </a>
            <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return onDeleteItem('.$item['id'].');">
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
        alt="" width="66.6666px" height="100px">
    </td>';
                    } else {
                        $html .= `
    <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
    width="66.6666px" height="100px">
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
        <a class="btn btn-success btn-sm" href="javascript:void(0);" onclick="return onAddInfo('.$item['id'].');">
            <i class="fas fa-pencil-alt"></i>Info
        </a>
        <a class="btn btn-info btn-sm" href="javascript:void(0);" onclick="return onEditItem('.$item['id'].');">
            <i class="fas fa-pencil-alt"></i>Edit
        </a>
        <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return onDeleteItem('.$item['id'].');">
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
                alt="" width="66.6666px" height="100px">
            </td>';
                            } else {
                                $html .= `
            <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
            width="66.6666px" height="100px">
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
                <a class="btn btn-success btn-sm" href="javascript:void(0);" onclick="return onAddInfo('.$item['id'].');">
                    <i class="fas fa-pencil-alt"></i>Info
                </a>
                <a class="btn btn-info btn-sm" href="javascript:void(0);" onclick="return onEditItem('.$item['id'].');">
                    <i class="fas fa-pencil-alt"></i>Edit
                </a>
                <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return onDeleteItem('.$item['id'].');">
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
            alt="" width="66.6666px" height="100px">
        </td>';
                        } else {
                            $html .= `
        <td><img src="'.$rootURL.'admin/images/no_image.png'.'" alt=""
        width="66.6666px" height="100px">
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
            <a class="btn btn-success btn-sm" href="javascript:void(0);" onclick="return onAddInfo('.$item['id'].');">
                <i class="fas fa-pencil-alt"></i>Info
            </a>
            <a class="btn btn-info btn-sm" href="javascript:void(0);" onclick="return onEditItem('.$item['id'].');">
                <i class="fas fa-pencil-alt"></i>Edit
            </a>
            <a class="btn btn-danger btn-sm" href="javascript:void(0);" onclick="return onDeleteItem('.$item['id'].');">
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

    public function edit($id)
    {
        $currentUser = Auth::guard('loyal_admin')->user();
        $currentUserId = $currentUser->id;
        $shop = ShopModel::where('user_id', $currentUserId)->first();
        $brands = BrandModel::all();
        $types = ItemTypesModel::where('brand_id', $brands[0]['id'])->get();
        $item = ItemModel::with('type.brand')->with(['images' => function($q){
            return $q->orderBy('images.default_img', 'DESC');
        }])->find($id);
        return view('admin/pages/items/edit',compact('types','brands','item','shop'));
    }

    public function update($id, ItemUpdateRequest $request)
    {
        $item = ItemModel::find($id);
        if ($item) {
            $item->update([
                'item_type_id' => $request->type,
                'shop_id' => $request->shop_id,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'feature' => $request->feature,
                'discout_item' => $request->discout_item,
            ]);
            return redirect('admin-mo/item/index')->with('success', "Cập nhật thành công");
        }else{
            return redirect('admin-mo/item/index')->with('error', 'Co Loi Xay Ra');
        }
    }

    public function delete($id)
    {
        $item = ItemModel::find($id);
        if ($item) {
            ItemModel::deleteItem($id);
            return redirect()->back()->with('success', "Xóa id: $id cà các relationship thành công");
        }else{
            return redirect()->back()->withErrors('Khong Tim Thay Item');
        }
    }
}
