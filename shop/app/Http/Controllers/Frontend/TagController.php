<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Article;

class TagController extends BlogBaseController
{
    public function index(Request $request, $slug){

        $tag = Tag::where('t_slug',$slug)->first();
        if(!$tag) return abort(404);

        $articles = Article::with('menu:id,mn_name,mn_slug')
            ->whereHas('tags', function($query) use ($tag){
                $query->where('at_tag_id', $tag->id);
            })
            ->orderByDesc('id')
            ->paginate(3);
        $viewData = [
            'articles' => $articles,
            'tag' => $tag,
            'tags' => $this->getTags(),
            'articlesLatest' => $this->getArticlesLatest(),
            'menus' => $this->getMenus()
        ];
        return view('frontend.menu.index',$viewData);
    }
}
