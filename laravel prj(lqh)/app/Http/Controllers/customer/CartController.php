<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemModel;
use App\Models\ItemDetailModel;
use App\Models\ImageModel;
use Session;

class CartController extends Controller
{
    public function index()
    {
        $loadCart = loadCart();
        $cart = $loadCart[0];
        $totalCurrentQuantity = $loadCart[1];
        $totalMoney = $loadCart[2];
        return view('customer/pages/cart',compact('cart','totalCurrentQuantity','totalMoney'));
    }

    public function ajaxGetAllItem()
    {
        $cart = Session::get('cart');
        if (empty($cart)) {
            $cart = [];
        }
        return $cart;
    }

    public function ajaxUpdateCart(Request $request)
    {
        $data= $request->all();
        $cart = Session::get('cart');
        $fetchCart = [];
        foreach ($data as $key => $value) {
            if (isset($cart[$key])) {
                $cart[$key]['current_quantity'] = $value;
                Session::put('cart', $cart);
                // array_push($fetchCart, );
                $item = Session::get("cart.$key");
                $fetchCart[$key] = $item;
            }
        }

        Session::forget('cart');
        Session::put('cart', $fetchCart);
        return Session::get('cart');
    }

    public function ajaxDeleteSession()
    {
        Session::flush();
    }

    // Ajax lấy Item theo ID
    public function ajaxAddToCart(Request $request)
    {

        $id = $request->id;
        $currentQuantity = $request->currentQuantity;
        $itemDetail = ItemDetailModel::with('item.images')->find($id);
        foreach ($itemDetail->item->images as $value) {
            if ($value->default_img == 1) {
                $itemDetail->item['image'] = $value->img;
            }
        }
        $item = $itemDetail->item;
        $cart = Session::get('cart');
        // nếu cart rỗng -> add sản phẩm đầu tiên
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $item['name'],
                    "image" => $item['image'],
                    "price" => $item['price'],
                    "discout_item" => $item['discout_item'],
                    "size" => $itemDetail['size'],
                    "max" => $itemDetail['quantity'],
                    "current_quantity" => $currentQuantity
                ]
            ];
            Session::put('cart', $cart);

            return Session::get('cart');
        }
        // neu item ton tai trong cart current_quantity+=current_quantity
        if (isset($cart[$id])) {
            if ($cart[$id]['current_quantity'] < $itemDetail['quantity']) {
                $cart[$id]['current_quantity']+=$currentQuantity;
            }
            Session::put('cart', $cart);

            return Session::get('cart');
        }
        // item chưa tồn tại -> add quantity = 1
        $cart[$id] = [
            "name" => $item['name'],
            "image" => $item['image'],
            "price" => $item['price'],
            "discout_item" => $item['discout_item'],
            "size" => $itemDetail['size'],
            "max" => $itemDetail['quantity'],
            "current_quantity" => $currentQuantity
        ];
        Session::put('cart', $cart);

        return Session::get('cart');
    }

    // Ajax remove Item theo ID
    public function ajaxRemoveItemById(Request $request)
    {
        $id = $request->id;
        if (Session::get("cart.$id")) {
            return Session::pull("cart.$id");
        }
    }

}
