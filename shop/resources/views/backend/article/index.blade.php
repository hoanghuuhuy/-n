@extends('layouts.app_backend')
@section('title','Danh sách bài viết')

@section('content')
<h1>danh sách bài viết <a href = "{{ route('get_backend.article.create') }}" class = "btn btn-lg btn-success div_right" style = "margin-bottom: 10px; margin-left : 10px">Thêm mới</a></h1>

<div class="row">
    <div class="card p-3">
        <table class="table table-striped table-hover" style="text-align: center">
            <thead>
            <tr >
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Danh mục</th> 
                <th>Time</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>
                        <a href = ''>
                            <img src = "{{ pare_url_file($item->a_avatar) }}" class = "img-thumbnail" style = "width: 60px; height: 60px" alt = "">
                        </a>
                    </td>
                    <td class="shorten" style="max-width: 40ch;">{{ $item->a_name }}</td>
                    <td>{{ $item->menu->mn_name ?? '[N\A]' }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <a href="{{ route('get_backend.article.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                        <a href="{{ route('get_backend.article.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $articles->onEachSide(1)->links() }}
        </div>
    </div>
</div>
@stop
