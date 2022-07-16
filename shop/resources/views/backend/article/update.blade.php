@extends('layouts.app_backend')
@section('title', 'cập nhật bài viết')

@section('content')

<h1>Cập nhật bài viết <a href = "{{ route('get_backend.article.create') }}" class = "btn btn-lg btn-success div_right" style = "margin-bottom: 10px; margin-left : 10px">Thêm mới</a></h1>
<form action = "" method = "POST" enctype="multipart/form-data">
        @include('backend.article.form')
    <button type="submit" class="btn btn-primary col-sm mt-2" style=" width: 200px">Cập nhật bài viết</button>
</form>

@stop
