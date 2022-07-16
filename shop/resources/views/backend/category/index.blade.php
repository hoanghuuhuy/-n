@extends('layouts.app_backend')
@section('title','Danh sách category')
@section('content')
<h1>danh sách category</h1>
<div class="row">
    <div class="col-sm-7 card p-3">
        <table class="table table-striped table-hover" style="text-align: center">
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
            @foreach ($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->c_name }}</td>
                    <td>{{ $item->c_slug }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('get_backend.category.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                        <a href="{{ route('get_backend.category.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $categories->onEachSide(1)->links() }}
        </div>
    </div>
    
    <div class="col-sm-5 card">
        <h4 class="display-10">Thêm category</h4>
            <form class="p-3" action=" {{route('get_backend.category.store')}} " method="POST">
                @include('backend.category.form')
                <button type="submit" class="btn btn-primary" >Thêm</button>
            </form>
    </div>
</div>
@stop
