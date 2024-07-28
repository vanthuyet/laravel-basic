@extends('admin.layout.master')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
<form action="{{route('products.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="name" name="ten" value="{{ old("ten")}}">
       
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Số lượng tồn</label>
        <input type="number" class="form-control" id="quantity" name="so_luong_ton" value="{{ old("so_luong_ton")}}">
        
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Giá bán</label>
        <input type="text" class="form-control" id="price" name="gia_ban" value="{{ old("gia_ban")}}">
        
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Mô tả</label>
        <textarea class="form-control" id="description" name="mo_ta" rows="3">{{ old("mo_ta")}}</textarea>
        
    </div>
    <div class="mb-3">
        <label for="supplier_id" class="form-label">Nhà cung cấp</label>
        <select class="form-select" id="supplier_id" name="supplier_id">
            @foreach ($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>
       
    </div>
    <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
    <a class="btn btn-primary" href="{{ route("products.index")}}">Trở lại</a>
</form>
@endsection