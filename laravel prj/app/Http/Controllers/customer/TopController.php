<?php

namespace App\Http\Controllers\customer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemModel;
use App\Models\ItemDetailModel;
use App\Models\ImageModel;
use App\Models\BrandModel;
use App\Models\CustomerModel;
use App\Models\ItemTypesModel;

use Session;

class TopController extends Controller
{

    public function index()
    {
        // $loadCart = loadCart();
        // $cart = $loadCart[0];
        // $totalCurrentQuantity = $loadCart[1];
        // $sale = ItemModel::with('images')->where('discout_item','>',0)->take(8)->get();
        $sale = ItemModel::with('images')->whereHas('item_details')->whereHas('images')->where('discout_item','>',0)->get();
        foreach ($sale as $sale_item) {
            foreach ($sale_item->images as $image) {
                if ($image->default_img == 1) {
                    $sale_item['image'] = $image->img;
                }
            }
        }

        // $data = ItemModel::with('images')->where('feature',1)->take(8)->get();
        $data = ItemModel::with('images')->whereHas('item_details')->whereHas('images')->where('feature',1)->get();
        foreach ($data as $item) {
            foreach ($item->images as $image) {
                if ($image->default_img == 1) {
                    $item['image'] = $image->img;
                }
            }
        }
        $success = '';
        if (Session::has('msg')) {
            $msg = Session::pull("msg");
            return view('customer/pages/index', compact('data','msg','sale'));
        }

        return view('customer/pages/index', compact('data','sale'));
    }

    // Ajax lấy Item theo ID



    // Ajax get all Item
    public function ajaxGetAllItemBy()
    {
        if (Session::get("cart")) {
            return Session::get("cart");
        }
    }
    public function shop()
    {
        $data = ItemModel::with('images')->paginate(12);
        foreach ($data as $sale_item) {
            foreach ($sale_item->images as $image) {
                if ($image->default_img == 1) {
                    $sale_item['image'] = $image->img;
                }
            }
        }
        $sale = ItemModel::with('images')->where('discout_item','>',0)->take(3)->get();
        foreach ($sale as $sale_item) {
            foreach ($sale_item->images as $image) {
                if ($image->default_img == 1) {
                    $sale_item['image'] = $image->img;
                }
            }
        }

        $top = ItemModel::with('images')->where('feature',1)->take(3)->get();
        foreach ($top as $item) {
            foreach ($item->images as $image) {
                if ($image->default_img == 1) {
                    $item['image'] = $image->img;
                }
            }
        }
        return view('customer/pages/shop', compact('data', 'sale', 'top'));
    }
    public function detail($id)
    {
        $data = ItemModel::with('images')->where('feature',1)->take(4)->get();
        foreach ($data as $item) {
            foreach ($item->images as $image) {
                if ($image->default_img == 1) {
                    $item['image'] = $image->img;
                }
            }
        }
       $item = ItemModel::with('item_details', 'images')->find($id);
       foreach ($item->images as $value) {
            if ($value->default_img == 1) {
                $item['image'] = $value->img;
            }
        }
       $firstValue = 1;
       $firstMin = 1;
       $firstMax = $item->item_details[0]->quantity;
       if (isset($item->item_details[0])) {
        $firstItemDetail = $item->item_details[0];
        if (isset(Session::get("cart")[$firstItemDetail->id])) {
            if (Session::get("cart")[$firstItemDetail->id]['current_quantity'] >= 0) {
                $firstMax = $firstItemDetail->quantity - Session::get("cart")[$firstItemDetail->id]['current_quantity'];
            }else{
                $firstMax = $firstItemDetail->quantity;
            }
            if ($firstMax == 0) {
                $firstMin = 0;
                $firstValue = 0;
            }
        }else{
            $firstMax = $item->item_details[0]->quantity;
            if ($firstMax == 0) {
                $firstMin = 0;
                $firstValue = 0;
            }
        }
       }



       $listSize = [];
       foreach ($item->item_details as $key => $value) {
            $listSize[] = $value;
       }
       $listImage= [];
       foreach ($item->images as $key => $value) {
           $listImage[]= $value->img;
       }
       return view('customer/pages/detail', compact('item','data','listSize','listImage','firstMax','firstMin','firstValue'));
    }
    public function about()
    {
       return view('customer/pages/about');
    }
    public function contact()
    {
       return view('customer/pages/contact');
    }
    public function register()
    {

       return view('customer/pages/register');
    }
    public function post_register(Request $request)
    {
        $register = new CustomerModel;
        $register->first_name = $request->first_name;
        $register->last_name =  $request->last_name;
        $register->email =  $request->email;
        $register->address = $request->address;
        $register->birthday =  $request->birthday;
        $register->city =  $request->city;
        $register->password = bcrypt($request->password);
        $register->tel = $request->tel;
        $register->gender = $request->gender;
        $register->save();
        return redirect('/login');

    }

    public function ajaxGetSizeById(Request $request)
    {
        $id = $request->id;
        $itemDetail = ItemDetailModel::findOrFail($id);
        $quantity = $itemDetail->quantity;
        $limit = null;

        if (Session::get("cart")) {
            if (isset(Session::get("cart")[$id])) {
                $itemCurrent = Session::get("cart")[$id];
                $limit = $quantity - $itemCurrent['current_quantity'];
            }
        }
        return [$quantity,$limit];
    }

    public function band(Request $request)
    {
        $id = $request->brandId;
        $name = $request->typeName;

        $band = BrandModel::with('item.item_details', 'item.images')->where('id',$id)->get();
        $bra = ItemModel::where('item_type_id',$id)->get();

        if (isset($name) && !empty($name) && isset($id)&& !empty($id)) {
            $listData = ItemTypesModel::with('item.item_details','item.images')->where(['brand_id'=> $id, 'name' => $name])->get();

            foreach ($listData as $data) {
                foreach ($data->item as $item) {
                    foreach ($item->images as $image) {
                        if ($image->default_img == 1) {
                            $item->img = $image->img;
                        }
                    }
                    unset($item->images);
                }
            }
        }else{
            if (isset($name) && !empty($name)) {
                $listData = ItemTypesModel::with('item.item_details','item.images')->where('name', $name)->get();
                foreach ($listData as $data) {
                    foreach ($data->item as $item) {
                        foreach ($item->images as $image) {
                            if ($image->default_img == 1) {
                                $item->img = $image->img;
                            }
                        }
                        unset($item->images);
                    }
                }
            }else{
                $listData = $band;
                foreach ($listData as $data) {
                    foreach ($data->item as $item) {
                        foreach ($item->images as $image) {
                            if ($image->default_img == 1) {
                                $item->img = $image->img;
                            }
                        }
                        unset($item->images);
                    }
                }
            }
        }

        $sale = ItemModel::with('images')->where('discout_item','>',0)->take(3)->get();
        foreach ($sale as $sale_item) {
            foreach ($sale_item->images as $image) {
                if ($image->default_img == 1) {
                    $sale_item['image'] = $image->img;
                }
            }
        }

        $top = ItemModel::with('images')->where('feature',1)->take(3)->get();
        foreach ($top as $item) {
            foreach ($item->images as $image) {
                if ($image->default_img == 1) {
                    $item['image'] = $image->img;
                }
            }
        }
        return view('customer/pages/brand', compact('listData','bra', 'sale', 'top'));

    }

    //top Product
    public function top(){
        $top = ItemModel::with('images')->where('feature',1)->paginate(12);
        foreach ($top as $item) {
            foreach ($item->images as $image) {
                if ($image->default_img == 1) {
                    $item['image'] = $image->img;
                }
            }
        }
        $sale = ItemModel::with('images')->where('discout_item','>',0)->take(3)->get();
        foreach ($sale as $sale_item) {
            foreach ($sale_item->images as $image) {
                if ($image->default_img == 1) {
                    $sale_item['image'] = $image->img;
                }
            }
        }
        return view('customer/pages/topProduct', compact('top', 'sale'));
    }

    //sale Product
    public function sale(){
        $sale = ItemModel::with('images')->where('discout_item','>',0)->paginate(12);
        foreach ($sale as $sale_item) {
            foreach ($sale_item->images as $image) {
                if ($image->default_img == 1) {
                    $sale_item['image'] = $image->img;
                }
            }
        }
        $top = ItemModel::with('images')->where('feature',1)->take(3)->get();
        foreach ($top as $item) {
            foreach ($item->images as $image) {
                if ($image->default_img == 1) {
                    $item['image'] = $image->img;
                }
            }
        }
        return view('customer/pages/saleProduct', compact('sale', 'top'));
    }

    //forgot password
    public function forgot()
    {
        return view('customer/pages/forgot');

    }


}
