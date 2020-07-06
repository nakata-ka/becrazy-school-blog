<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Taxonomy;
use Auth;

class CategoryController extends Controller {
//ホーム
    public function home() {
        $categories=Taxonomy::where('type','tag')->get();
        return view('index',['categories'=>$categories,'link_navi'=>'home']);
    }

//カテゴリー別
    public function indicate($category) {
        $taxonomies=Taxonomy::where('name',$category)->first();
        if($taxonomies->name==='boardgame') {
            return view('category.boardgame',['link_navi'=>$taxonomies->name]);
        }elseif($taxonomies->name==='mountain') {
            return view('category.mountain',['link_navi'=>$taxonomies->name]);
        }elseif($taxonomies->name==='book') {
            return view('category.book',['link_navi'=>$taxonomies->name]);
        }
    }

//　記事詳細
    public function show($category,$slug) {
        $posts=Post::where('slug',$slug,)->first();
        if($category==='boardgame') {
            return view('article',['posts'=>$posts,'link_navi'=>'boardgame']);
        }elseif($category==='mountain') {
            return view('article',['posts'=>$posts,'link_navi'=>'mountain']);
        }elseif($category==='book') {
            return view('article',['posts'=>$posts,'link_navi'=>'book']);
        }
    }
}
