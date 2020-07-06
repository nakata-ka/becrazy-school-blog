@extends('layouts.admin')

@section('title','記事削除')
@section('maintitle','記事削除')

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
                    <th scope="col">UserID</th>
                    <th scope="col">title</th>
                    <th scope="col">content</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{$post->id}}"></td>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->user_id}}</td>
                        <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$post->title}}</td>
                        <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$post->content}}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    <input class="button" type="submit" value="削除する">
</form>
@endsection
