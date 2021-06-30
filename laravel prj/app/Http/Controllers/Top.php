<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Top extends Controller
{
    public function index()
    {
      // $producer = ProducerModel::with('item')->get();
      //  return $producer;
       //  $data = json_encode($data);
      return view('pages/top-page/index');
   }
}
