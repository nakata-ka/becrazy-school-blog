@extends('layouts.admin')

@section('title','管理者登録')
@section('maintitle','管理者登録')

@section('main')
@parent
<h5>{{$message}}</h5>
<a href="/admin/userList">管理者一覧へ</a>

@endsection
