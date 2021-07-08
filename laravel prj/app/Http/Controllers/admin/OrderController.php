<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OderModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OderModel::with('customer')->get();
        return view('admin/pages/orders/index', compact('orders'));
    }
}
