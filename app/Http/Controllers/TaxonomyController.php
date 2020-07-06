<?php

namespace App\Http\Controllers;

use App\Models\Taxonomy;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Auth;

class TaxonomyController extends Controller
{
    //カテゴリー追加Form
    public function addForm() {
        return view('taxonomy.addform',['link_navi'=>'classadd']);
    }

    //カテゴリー・タグを追加する
    public function add(Request $request) {
        $taxonomies=new Taxonomy();
        $taxonomies->type=$request->type;
        $taxonomies->name=$request->name;
        $taxonomies->slug=$request->slug;
        $taxonomies->description=$request->description;
        $taxonomies->save();
        if($taxonomies->save()) {
            $message="保存に成功しました。";
        }else {
            $message="保存に失敗しました。";
        }
        return view('taxonomy.add',["taxonomys"=>$taxonomies,"message"=>$message,'link_navi'=>'classadd']);
    }

    //カテゴリ一覧を見る
    public function list() {
        $taxonomies=Taxonomy::all();
        return view("taxonomy.list",['taxonomies'=>$taxonomies,'link_navi'=>'classlist']);
    }

    //カテゴリー選択のページにいく
    public function selectForm() {
        $taxonomies=Taxonomy::all();
        return view("taxonomy.selectForm",['taxonomies'=>$taxonomies,'link_navi'=>'classedit']);
    }

    //カテゴリー編集のページにいく
    public function editForm(Request $request) {
        $taxonomies=Taxonomy::find($request->id);
        if(is_null($taxonomies)){
            return redirect('taxonomy.selectForm');
        }
        return view("taxonomy.editForm",['taxonomies'=>$taxonomies,'link_navi'=>'classedit']);
    }

    //カテゴリー・タグの編集をする
    public function update(Request $request) {
        $taxonomies=Taxonomy::find($request->id);
        $taxonomies->type=$request->type;
        $taxonomies->name=$request->name;
        $taxonomies->slug=$request->slug;
        $taxonomies->description=$request->description;
        $taxonomies->save();
        if($taxonomies->save()) {
            $message="更新に成功しました。";
        }else {
            $message="更新に失敗しました。";
        }
        return view('taxonomy.update',["taxonomies"=>$taxonomies,"message"=>$message,'link_navi'=>'classedit']);
    }

    //カテゴリー・タグ論理削除ページへ
    public function deleteForm() {
        $taxonomies=taxonomy::all();
        return view('taxonomy.deleteList',['taxonomies'=>$taxonomies,'link_navi'=>'classdelete']);
    }

    //カテゴリー・タグを論理削除する
    public function delete(Request $request) {
        $ValidatedData = $request->validate ([
            "ids"=>'required|array'
        ]);
        $taxonomies=Taxonomy::destroy($request->ids);
        return view('taxonomy/deleteList',['link_navi'=>'classdelete']);
    }
}
