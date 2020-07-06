<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Auth;
use App\Http\Requests\PostRequest;

class PostController extends Controller {
    //記事追加Form
    public function addForm() {
        $user_id=Auth::id();
        return view('post.addForm',['user_id'=>$user_id,'link_navi'=>'articleadd']);
    }

    //記事を追加する
    public function add(Request $request) {
        $posts=new Post();
        $posts->user_id=$request->user_id;
        $posts->title=$request->title;
        $posts->content=$request->content;
        $posts->status=$request->status;
        $posts->slug=$request->slug;
        $posts->type=$request->type;
        $posts->mime_type=$request->mime_type;
        $posts->save();
        if($posts->save()) {
            $message="保存に成功しました。";
        }else {
            $message="保存に失敗しました。";
        }
        return view('post.add',["posts=>$posts","message"=>$message,'link_navi'=>'articleadd']);
    }

    //記事一覧を見る
    public function list() {
        $posts=Post::all();
        return view("post.list",['posts'=>$posts,'link_navi'=>'articlelist']);
    }

    //記事編集のページにいく
    public function editForm() {
        $posts=Post::all();
        return view("post.editForm",['posts'=>$posts,'link_navi'=>'articleedit']);
    }

    //記事編集をする
    public function edit(Request $request) {
        $posts=Post::find($request->id);
        if(is_null($posts)){
            return redirect('post.editForm');
        }
        return view("post.edit",['posts'=>$posts,'link_navi'=>'articleedit']);
    }

    //記事編集をする
    public function update(Request $request) {
        $posts=Post::find($request->id);
        $posts->title=$request->title;
        $posts->content=$request->content;
        $posts->status=$request->status;
        $posts->slug=$request->slug;
        $posts->type=$request->type;
        $posts->save();
        if($posts->save()) {
            $message="更新に成功しました。";
        }else {
            $message="更新に失敗しました。";
        }
        return view('post.update',["posts=>$posts","message"=>$message,'link_navi'=>'articleedit']);
    }

    //記事論理削除ページへ
    public function deleteForm() {
        $posts=Post::all();
        return view("post.deleteList",['posts'=>$posts,'link_navi'=>'articledelete']);
    }

    //記事を論理削除する
    public function delete(Request $request) {
        $posts=Post::destroy($request->ids);
        return view('post.delete',['link_navi'=>'articlelist']);
    }
}
