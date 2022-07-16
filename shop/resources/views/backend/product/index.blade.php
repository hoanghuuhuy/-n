@extends('layouts.app_backend')
@section('title','Danh sách sản phẩm')

@section('content')
<h1 >danh sách sản phẩm <a href = "{{ route('get_backend.product.create') }}" class = "btn btn-lg btn-success div_right" style = "margin-bottom: 10px; margin-left : 10px">Thêm mới</a></h1>

<div class="row">
    <div class="card p-3">
        <table class="table table-striped table-hover" style="text-align: center">
            <thead>
            <tr >
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Category</th>
                <th>Time</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href = ''>
                            <img src = "{{ pare_url_file($item->pro_avatar) }}" class = "img-thumbnail" style = "width: 60px; height: 60px" alt = "">
                        </a>
                    </td>
                    <td class="shorten" style="max-width: 20ch;">{{ $item->pro_name }}</td>
                    <td class="shorten" style="max-width: 30ch;">{{ $item->pro_slug }}</td>
                    <td><span>{{ number_format($item->pro_price, 0, '', ',' ) }} đ </span></td>
                    <td>{{ number_format($item->pro_number, 0, '', ',' ) }}</td>
                    <td>{{ $item->category->c_name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('get_backend.product.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                        <a href="{{ route('get_backend.product.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $products->onEachSide(1)->links() }}
        </div>
    </div>
</div>
@stop
