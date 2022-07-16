@extends('layouts.app_backend')
@section('title', 'Thêm sản phẩm')

@section('content')

<h1>Cập nhật sản phẩm</h1>
<form action = "" method = "POST" enctype="multipart/form-data">
        @include('backend.product.form')
    <button type="submit" class="btn btn-primary col-sm mt-2" style=" width: 150px">Thêm sản phẩm</button>
</form>

@stop
