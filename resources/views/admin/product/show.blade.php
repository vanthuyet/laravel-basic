@extends('admin.layout.master')
@section('title')
    Chi tiết sản phẩm
@endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Hãng</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Số lượng tồn</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
            </tr>
        </thead>
        <tbody>          
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->supplier_id }}</td>
                    <td>{{ $product->ten }}</td>
                    <td>{{ $product->so_luong_ton }}</td>
                    <td>{{ $product->gia_ban }}</td>
                    <td>{{ $product->mo_ta }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                </tr>

        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route("products.index")}}">Trở lại</a>
@endsection
