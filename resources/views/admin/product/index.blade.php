@extends('admin.layout.master')
@section('title')
    Đây là trang sản phẩm
@endsection
@section('content')
    <a class="btn btn-success my-3" href="{{ route('products.create') }}">Thêm sản phẩm</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name</th>
                <th scope="col">Giá</th>
                <th scope="col">Số lượng tồn</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Hành động</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->ten }}</td>
                    <td>{{ $item->gia_ban }}</td>
                    <td>{{ $item->so_luong_ton }}</td>
                    <td>{{ $item->mo_ta }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('products.show', $item->id) }}">Chi tiết</a>
                        <a class="btn btn-warning" href="{{ route('products.edit', $item->id) }}">Sửa</a>
                        <a class="btn btn-danger" href="{{ route('products.destroy', $item->id) }}">Xoá</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
