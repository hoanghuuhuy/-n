@extends('layouts.app_backend')
@section('title', 'cập nhật sản phẩm')
@section('content')

<h1>Cập nhật sản phẩm <a href = "{{ route('get_backend.product.create') }}" class = "btn btn-lg btn-success div_right" style = "margin-bottom: 10px; margin-left : 10px">Thêm mới</a></h1>
<form action = "" method = "POST" enctype="multipart/form-data">
        @include('backend.product.form')
    <button type="submit" class="btn btn-primary col-sm mt-2" style=" width: 200px">Cập nhật sản phẩm</button>
</form>

@stop