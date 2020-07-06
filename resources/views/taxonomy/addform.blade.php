@extends('layouts.admin')

@section('title','カテゴリー追加')

@section('maintitle','カテゴリーの追加')

@section('main')
@parent
<div class="card">
    <div class="card-header">TaxonomyAdd</div>
        <div class="card-body">
            <form method="POST">
            @csrf
                <div class="form-group row">
                    <label for="type" class="col-md-3 col-form-label text-md-right">Type</label>
                    <div class="col-md-7">
                        <select class="form-control" name="type" id="exampleFormControlSelect1">
                            <option>category</option>
                            <option>tag</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-3 col-form-label text-md-right">TypeName</label>
                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
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
                    <label for="description" class="col-md-3 col-form-label text-md-right">Description</label>
                    <div class="col-md-7">
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('description')
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
