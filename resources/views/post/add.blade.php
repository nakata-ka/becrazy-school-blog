@extends('layouts.admin')

@section('title','記事追加')
@section('maintitle','記事追加')

@section('main')
@parent
<h5>{{$message}}</h5>
<a href="/admin/articleList">記事一覧へ</a>

@endsection
