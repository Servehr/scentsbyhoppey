<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopListController extends Controller
{
    //
    public function index()
    {
        return view('shop.shop-list');
    }
}
