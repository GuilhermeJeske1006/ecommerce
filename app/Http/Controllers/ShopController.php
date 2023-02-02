<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function Index(){
        return view('shop.Index');
    }

    public function Check(){
        return view('CheckOut.index');
    }
}
