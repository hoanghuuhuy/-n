@extends('layouts.app_backend')
@section('title','Danh sách menu')

@section('content')
<h1>danh sách menu</h1>
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
            @foreach ($menus as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->mn_name }}</td>
                    <td>{{ $item->mn_slug }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('get_backend.menu.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                        <a href="{{ route('get_backend.menu.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $menus->onEachSide(1)->links() }}
        </div>
    </div>
    
    <div class="col-sm-5 card">
        <h4 class="display-10">Thêm Menu</h4>
            <form class="p-3" action=" {{route('get_backend.menu.store')}} " method="POST">
                @include('backend.menu.form')
                <button type="submit" class="btn btn-primary" >Thêm</button>
            </form>
    </div>
</div>
@stop
