<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendCategoryRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Str;
class BackendCategoryController extends Controller
{
    protected $folder = 'backend.category.';
    public function index()
    {
        $categories = Category::orderByDesc('id')->paginate(5);
        $viewData = [
            'categories' => $categories 
        ];
        return view($this->folder.'index', $viewData);
    }

    public function store(BackendCategoryRequest $request)
    {
        $data = $request->except('_token');
        $data['c_slug'] = Str::slug($request->c_name);
        $data['created_at'] = Carbon::now('Etc/GMT-7');
        $categories = Category::create($data);
        return redirect()->back();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::orderByDesc('id')->get();
        $viewData = [
            'categories' => $categories,
            'category' => $category
        ];
        return view ($this->folder. 'update', $viewData);
    }

    public function update(BackendCategoryRequest $request, $id)
    {
        $data = $request->except('_token');
        $data['c_slug'] = Str::slug($request->c_name);
        $data['updated_at'] = Carbon::now('Etc/GMT-7');
        Category::find($id)->update($data);
        return redirect()->back(); 
    }

    public function delete($id)
    {
        \DB::table('categories')->where('id', $id)->delete();
        return redirect()->route('get_backend.category.index');
    }
}
