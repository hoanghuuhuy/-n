<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends ProductBaseController
{
    public function index(Request $request, $slug)
    {
        $category = Category::where('c_slug', $slug)->first();
        if(!$category) return abort(404);

        $products = Product::with('category:id,c_name,c_slug')->where('pro_category_id', $category->id)->orderByDesc('id')->paginate(6);
        $viewData = [
            'products' => $products,
            'category' => $category
        ];
        return view('frontend.category.index', $viewData);
    }
}
