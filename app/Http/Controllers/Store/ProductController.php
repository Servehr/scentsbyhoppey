<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('store.catalog.product');
    }

    public function products()
    {
        return view('store.catalog.all-products');
    }

}
