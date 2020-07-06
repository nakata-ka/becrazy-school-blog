@extends('layouts.admin')

@section('title','パスワード変更')
@section('maintitle','パスワード変更')

@section('main')
@parent
<h6>下記よりパスワードを変更したいユーザーをチェックしてください</h6>
<form method="POST" action="pwEditForm">
    @csrf
    <table class="table table-striped" style="table-layout:fixed">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><input type="radio" name="id" value="{{$user->id}}"></td>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$user->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <input class="button" type="submit" value="編集する">
</form>
@endsection
