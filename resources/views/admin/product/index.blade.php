@extends('admin.layout.master')
@section('title')
    Đây là trang sản phẩm
@endsection
@section('content')
    <a class="btn btn-success my-3" href="{{ route('products.create') }}">Thêm sản phẩm</a>
    @if (isset($_SESSION['success']))
        <div class="alert alert-success">
            {{ $_SESSION['success'] }}
        </div>

        @php
            unset($_SESSION['success']);
        @endphp
    @endif

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
                        <form action="{{ route('products.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger ">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
