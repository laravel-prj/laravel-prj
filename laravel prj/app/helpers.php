<?php

function loadCart()
{
    $cart = [];
    $totalCurrentQuantity = $totalMoney = $totalDiscount =0;
    if (Session::get('cart')) {
        $cart = Session::get('cart');
        $totalCurrentQuantity = 0;
        $totalMoney = 0;
        foreach ($cart as $key => $value) {
            $totalCurrentQuantity += $value['current_quantity'];
            $totalDiscount = ($value['price'] * $value['current_quantity']) * ($value['discout_item'] / 100);
            $totalMoney += ($value['price'] * $value['current_quantity']) - $totalDiscount;
        }
    }

    return [$cart, $totalCurrentQuantity, $totalMoney,$totalDiscount];
}

// forgot
function rand_pass( $length = 10 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);
}
