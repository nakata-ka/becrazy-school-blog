@extends('layouts.admin')

@section('title','カテゴリー・タグ編集')
@section('maintitle','カテゴリー・タグ編集')

@section('main')
@parent
<h6>下記より更新したい項目にチェックしてください</h6>
<form method="POST">
    @csrf
    <table class="table table-striped" style="table-layout:fixed">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taxonomies as $taxonomy)
                    <tr>
                        <td><input type="radio" name="id" value="{{$taxonomy->id}}"></td>
                        <th scope="row">{{$taxonomy->id}}</th>
                        <td>{{$taxonomy->type}}</td>
                        <td>{{$taxonomy->name}}</td>
                        <td>{{$taxonomy->slug}}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    <input class="button" type="submit" value="編集する">
</form>
@endsection
