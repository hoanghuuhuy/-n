<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends ProductBaseController
{
    public function index(){
        $products = Product::with('category:id,c_name,c_slug')->orderByDesc('id')->paginate(6);
        // $categories = $this->getCategories();
        $viewData = [
            'products' => $products,
            // 'categories' => $categories
        ];
        return view('frontend.category.index',$viewData);
    }
}
