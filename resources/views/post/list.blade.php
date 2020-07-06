@extends('layouts.admin')

@section('title','記事一覧')
@section('maintitle','記事一覧')

@section('main')
@parent
<div class="table-responsive">
    <table class="table table-striped" style="table-layout:fixed">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">UserID</th>
                <th scope="col">title</th>
                <th scope="col">content</th>
                <th scope="col">status</th>
                <th scope="col">slug</th>
                <th scope="col">type</th>
                <th scope="col">mime_type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->user_id}}</td>
                    <td class='table' style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$post->title}}</td>
                    <td class='table' style="width:100px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap;">{{$post->content}}</td>
                    <td>{{$post->status}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->type}}</td>
                    <td>{{$post->mime_type}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
