@extends('admin.layout.master')
@section('title')
    Chi tiết nhà cung cấp
@endsection
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên nhà cung cấp</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>
            </tr>
        </thead>
        <tbody>          
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->name }}</td>
                    <td>{{ $supplier->dia_chi }}</td>
                    <td>{{ $supplier->dien_thoai }}</td>
                    <td>{{ $supplier->email }}</td>
                    <td>{{ $supplier->created_at }}</td>
                    <td>{{ $supplier->updated_at }}</td>
                </tr>

        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route("suplliers.index")}}">Trở lại</a>
@endsection
