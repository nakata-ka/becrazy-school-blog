@extends('layouts.admin')

@section('title','管理者一覧')
@section('maintitle','管理者一覧')

@section('main')
@parent
<table class="table table-striped" style="table-layout:fixed">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">password</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$user->email}}</td>
                <td style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$user->password}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
