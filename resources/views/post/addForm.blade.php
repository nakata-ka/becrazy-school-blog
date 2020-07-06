@extends('layouts.admin')

@section('title','記事追加')
@section('maintitle','記事追加')

@section('main')
@parent
<div class="card">
    <div class="card-header">ArticleAdd</div>
        <div class="card-body">
            <form method="POST">
            @csrf
                <div class="form-group row">
                    <input name="user_id" type="hidden" value="{{$user_id}}">
                    <label for="title" class="col-md-3 col-form-label text-md-right">Title</label>
                    <div class="col-md-7">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-md-3 col-form-label text-md-right">Content</label>
                    <div class="col-md-7">
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="4"></textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-md-3 col-form-label text-md-right">Status</label>
                    <div class="col-md-7">
                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                            <option>publish</option>
                            <option>draft</option>
                            <option>inherit</option>
                        </select>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="slug" class="col-md-3 col-form-label text-md-right">Slug</label>
                    <div class="col-md-7">
                        <input id="slug" type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" value="{{ old('slug') }}" required autocomplete="slug" autofocus>
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-md-3 col-form-label text-md-right">Type</label>
                    <div class="col-md-7">
                        <select class="form-control" name="type" id="exampleFormControlSelect1">
                            <option>article</option>
                            <option>page</option>
                            <option>attachment</option>
                        </select>
                        @error('type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="mime_type" class="col-md-3 col-form-label text-md-right">Mime_Type</label>
                    <div class="col-md-7">
                        <select class="form-control" name="mime_type" id="exampleFormControlSelect1">
                            <option>text/html</option>
                            <option>image/png</option>
                            <option>image/jpeg</option>
                        </select>
                        @error('mime_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>
        </div>
</div>
@endsection
