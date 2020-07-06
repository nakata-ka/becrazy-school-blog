@extends('layouts.admin')

@section('title','カテゴリー・タグ削除')
@section('maintitle','カテゴリー・タグ削除')

@section('main')
@parent
<h6>下記より削除したい項目にチェックしてください</h6>
<form method="POST">
    @csrf
    <table class="table table-striped" style="table-layout:fixed">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">name</th>
                    <th scope="col">slug</th>
                    <th scope="col">description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($taxonomies as $taxonomy)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{$taxonomy->id}}"></td>
                        <th scope="row">{{$taxonomy->id}}</th>
                        <td>{{$taxonomy->type}}</td>
                        <td>{{$taxonomy->name}}</td>
                        <td>{{$taxonomy->slug}}</td>
                        <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$taxonomy->description}}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    <input class="button mb-3" type="submit" value="削除する">
</form>
@endsection
