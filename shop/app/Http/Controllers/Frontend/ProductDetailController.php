<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailController extends ProductBaseController
{
    public function index()
    {
        return view('frontend.product_detail.index');
    }
}
