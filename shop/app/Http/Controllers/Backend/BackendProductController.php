<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendProductRequest;
use App\Http\Requests\BackendCategoryRequest;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BackendProductController extends Controller
{
    protected $folder = 'backend.product.';
    public function index()
    {
        $products = Product::with('category:id,c_name')->orderByDesc('id')->paginate(10);

        $viewData = [
            'products' => $products
        ];
        return view($this->folder.'index', $viewData);
    }

    public function create()
    {
        $categories = Category::all();
        $viewData = [
            'categories' => $categories
        ];
        return view($this->folder.'create', $viewData);
    }

    public function store(BackendProductRequest $request)
    {
        $data = $request->except('_token', 'pro_avatar');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now('Etc/GMT-7');
        if($request->pro_avatar)
        {
            $image = upload_image('pro_avatar');
            if(isset($image['code']))
            {
                $data['pro_avatar'] = $image['name'];
            }
        }
        $product = Product::create($data);
        return redirect()->route('get_backend.product.index');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::find($id);
        $viewData = [
            'product' => $product,
            'categories' => $categories
        ];
        return view($this->folder.'update',$viewData);
    }

    public function update(BackendProductRequest $request, $id)
    {
        $data = $request->except('_token', 'pro_avatar');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['update_at'] = Carbon::now('Etc/GMT-7');
        if($request->pro_avatar)
        {
            $image = upload_image('pro_avatar');

            if(isset($image['code']))
            {
                $data['pro_avatar'] = $image['name'];
            }
        }
        Product::find($id)->update($data);
        return redirect()->route('get_backend.product.index');
    }

    public function delete($id)
    {
        \DB::table('products')->where('id', $id)->delete();
        return redirect()->route('get_backend.product.index');
    }
}
