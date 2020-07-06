@extends('layouts.admin')

@section('title','パスワード変更')
@section('maintitle','パスワード変更')

@section('main')
@parent
<form method="POST" action="pwUpdate">
    @csrf
    <input name="id" type="hidden" value="{{$users->id}}">
    <div class="form-group">
        <label for="exampleFormControlInput1">PW</label>
        <input type="text" name="password" class="form-control" id="exampleFormControlInput1" value="{{$users->password}}">
    </div>
    <input class="button" type="submit" value="更新する">
</form>
@endsection
