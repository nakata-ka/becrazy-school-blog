@extends('layouts.admin')

@section('title','記事更新')
@section('maintitle','記事更新')

@section('main')
@parent
<h4 >{{$message}}</h4>
<a href="/admin/articleList">記事一覧へ</a>
@endsection
