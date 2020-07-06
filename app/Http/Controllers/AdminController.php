<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller {
    //初期登録・管理ユーザ登録form
    public function registerForm() {
        return view('admin.registerForm',['link_navi'=>'register']);
    }

    //初期登録・管理ユーザ登録
    public function register(Request $request) {
        $users=new User();
        $users->name=$request->name;
        $users->email=$request->email;
        $users->password=$request->password;
        $users->save();
        if($users->save()) {
            $message="保存に成功しました。";
        }else {
            $message="保存に失敗しました。";
        }
        return view('admin.register',["users=>$users","message"=>$message,'link_navi'=>'register']);
    }

    //管理ユーザ一覧
    public function list() {
        $users=User::All();
        return view('admin.list',['users'=>$users,'link_navi'=>'userlist']);
    }

    //パスワード変更 -選択form
    public function selectForm() {
        $users=User::all();
        return view('admin.selectForm',['users'=>$users,'link_navi'=>'pwupdate']);
    }
    //パスワード変更 -変更form
    public function editForm(Request $request) {
        $users=User::find($request->id);
        return view('admin.editForm',['users'=>$users,'link_navi'=>'pwupdate']);
    }
    //パスワード変更
    public function update(Request $request) {
        $users=User::find($request->id);
        $users->password=$request->password;
        $users->save();
        if($users->save()) {
            $message='変更完了';
        }else{
            $message='変更失敗';
        }
        return view('admin.update',['message'=>$message,'link_navi'=>'pwupdate']);
    }
}
