@extends('layouts.admin')

@section('title','パスワード変更')
@section('maintitle','パスワード変更')

@section('main')
@parent
<h5>{{$message}}</h5>
<a href="/admin/userList">ユーザー一覧へ</a>
@endsection
