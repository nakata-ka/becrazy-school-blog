@extends('layouts.blog')

@section('title',$posts->title)
@section('maintitle',$posts->title)
@section('main')
@parent
<div class="container">
    <div class="row">
        <p>{{$posts->created_at}}</p>
        <p>{{$posts->content}}</p>
    </div>
</div>
@endsection
