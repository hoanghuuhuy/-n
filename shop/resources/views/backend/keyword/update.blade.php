@extends('layouts.app_backend')
@section('title','Cập nhật keyword')
@section('content')
<h1>danh sách keyword</h1>
<div class="row">
    <div class="col-sm-7 card p-3">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Time</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($keywords as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->k_name }}</td>
                    <td>{{ $item->k_slug }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('get_backend.keyword.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                        <a href="{{ route('get_backend.keyword.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="col-sm-5 card">
        <h4 class="display-10">Cập nhật Keyword</h4>
            <form class="p-3" method="POST">
            @include('backend.keyword.form')
                <button type="submit" class="btn btn-primary" formaction="{{ route('get_backend.keyword.update', $keyword->id) }}" >Cập nhật</button>
                <button type="submit" class="btn btn-primary" formaction="{{ route('get_backend.keyword.store') }}" >Thêm</button>
            </form>
    </div>
</div>
@stop
