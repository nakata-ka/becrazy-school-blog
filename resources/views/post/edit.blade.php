@extends('layouts.admin')

@section('title','記事編集')
@section('maintitle','記事編集')

@section('main')
@parent
<form method="POST" action="articleUpdate">
    @csrf
        <input name="id" type="hidden" value="{{$posts->id}}">
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{$posts->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="8">{{$posts->content}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select class="form-control" name="status" id="exampleFormControlSelect1" placeholder="{{$posts->status}}">
            <option>publish</option>
            <option>draft</option>
            <option>inherit</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Slug</label>
            <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" value="{{$posts->slug}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Type</label>
            <select class="form-control" name="type" id="exampleFormControlSelect1" value="{{$posts->type}}">
            <option>article</option>
            <option>page</option>
            <option>attachment</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Mime_Type</label>
            <select class="form-control" name="mime_type" id="exampleFormControlSelect1" value="{{$posts->mime_type}}">
            <option>text/html</option>
            <option>image/png</option>
            <option>image/jpeg</option>
            </select>
        </div>
        <input class="btn btn-outline-success btn-sm mt-4" type="submit" value="更新する">
</form>
@endsection
