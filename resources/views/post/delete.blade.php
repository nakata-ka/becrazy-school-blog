@extends('layouts.admin')

@section('title','記事削除')
@section('maintitle','記事削除')

@section('main')
@parent
<h4 >削除しました</h4>
<a href="/admin/articleList">記事一覧へ</a>
@endsection
