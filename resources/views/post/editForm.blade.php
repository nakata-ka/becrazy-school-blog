@extends('layouts.admin')

@section('title','記事編集')
@section('maintitle','記事編集')

@section('main')
@parent
<h6>下記より編集したい項目をチェックしてください</h6>
<form method="POST">
    @csrf
    <table class="table table-striped" style="table-layout:fixed">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">UserID</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td><input type="radio" name="id" value="{{$post->id}}"></td>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->user_id}}</td>
                    <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$post->title}}</td>
                    <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$post->content}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <input class="button" type="submit" value="編集する">
</form>
@endsection
