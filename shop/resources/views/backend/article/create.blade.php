@extends('layouts.app_backend')
@section('title', 'Thêm bài viết')

@section('content')

<h1>thêm bài viết</h1>
<form action = "" method = "POST" enctype="multipart/form-data">
        @include('backend.article.form')
    <button type="submit" class="btn btn-primary col-sm mt-2" style=" width: 150px">Thêm bài viết</button>
</form>

@stop
