<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackendKeywordRequest;
use App\Models\Keyword;
use Carbon\Carbon;
use Illuminate\Support\Str;

class BackendKeywordController extends Controller
{
    protected $folder = 'backend.keyword.';
    public function index()
    {
        $keywords = Keyword::orderByDesc('id')->paginate(5);

        $viewData = [
            'keywords' => $keywords
        ];
        return view($this->folder.'index', $viewData);
    }

    public function store(BackendKeywordRequest $request)
    {
        $data = $request->except('_token');
        $data['k_slug'] = Str::slug($request->k_name);
        $data['created_at'] = Carbon::now('Etc/GMT-7');
        $keyword = Keyword::create($data);
        return redirect()->back();
    }

    public function edit($id)
    {
        $keyword = Keyword::find($id);
        $keywords = Keyword::orderByDesc('id')->get();
        $viewData = [
            'keywords' => $keywords,
            'keyword' => $keyword
        ];
        return view ($this->folder. 'update', $viewData);
    }

    public function update(BackendKeywordRequest $request, $id)
    {
        $data = $request->except('_token');
        $data['k_slug'] = Str::slug($request->k_name);
        $data['updated_at'] = Carbon::now('Etc/GMT-7');
        Keyword::find($id)->update($data);
        return redirect()->back(); 
    }

    public function delete($id)
    {
        \DB::table('keywords')->where('id', $id)->delete();
        return redirect()->route('get_backend.keyword.index');
    }
}
