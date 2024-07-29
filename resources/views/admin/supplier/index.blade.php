@extends('admin.layout.master')
@section('title')
    Quản lí nhà cung cấp
@endsection
@section('content')
    <a class="btn btn-success my-3" href="{{ route('suplliers.create') }}">Thêm nhà cung cấp</a>
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
                <th scope="col">Tên</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Hành động</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->dia_chi }}</td>
                    <td>{{ $item->dien_thoai }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('suplliers.show', $item->id) }}">Chi tiết</a>
                        <a class="btn btn-warning" href="{{ route('suplliers.edit', $item->id) }}">Sửa</a>
                        <form action="{{ route('suplliers.destroy', $item->id) }}" method="POST" class="d-inline">
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
