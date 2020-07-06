@extends('layouts.admin')

@section('title','カテゴリー一覧')
@section('maintitle','カテゴリー一覧')

@section('main')
@parent
<div class="table-responsive">
    <table class="table table-striped" style="table-layout:fixed">
        <thead>
            <tr>
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
                    <th scope="row">{{$taxonomy->id}}</th>
                    <td>{{$taxonomy->type}}</td>
                    <td>{{$taxonomy->name}}</td>
                    <td>{{$taxonomy->slug}}</td>
                    <td>{{$taxonomy->description}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
