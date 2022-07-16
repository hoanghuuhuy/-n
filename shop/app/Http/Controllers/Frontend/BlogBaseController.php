<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Tag;
use App\Models\Article;

class BlogBaseController extends Controller
{
    public function getMenus(){
        $menus = Menu::withCount('articles')
        ->orderByDesc('id')
        ->get();

        return $menus;
    }

    public function getTags(){
        return Tag::orderByDesc('id')->get();
    }

    public function getArticlesLatest(){
        return Article::orderByDesc('id')->limit(5)->select('id','a_name','a_avatar','created_at','a_slug')->get();
    }
}
