@extends('layouts.admin')

@section('title','カテゴリー・タグ編集')
@section('maintitle','カテゴリー・タグ編集')

@section('main')
@parent
<form method="POST" action="classUpdate">
    @csrf
        <input name="id" type="hidden" value="{{$taxonomies->id}}">
        <div class="form-group">
            <label for="exampleFormControlInput1">type</label>
            <select class="form-control" name="type" id="exampleFormControlSelect1" placeholder="{{$taxonomies->type}}">
            <option>category</option>
            <option>tag</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">typename</label>
            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{$taxonomies->name}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Slug</label>
            <input type="text" name="slug" class="form-control" id="exampleFormControlInput1" value="{{$taxonomies->slug}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$taxonomies->description}}</textarea>
        </div>
        <input class="btn btn-outline-success btn-sm mt-4" type="submit" value="更新する">
</form>
@endsection
