@extends('admin.layout.master')
@section('title')
    Chỉnh sửa nhà cung cấp
@endsection
@section('content')
<form action="{{route('suplliers.update')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Tên nhà cung cấp</label>
        <input type="text" class="form-control" id="name" name="name" value="">
       
    </div>
    <div class="mb-3">
        <label for="dia_chi" class="form-label">Địa chỉ</label>
        <input type="number" class="form-control" id="dia_chi" name="dia_chi" value="">
        
    </div>
    <div class="mb-3">
        <label for="dien_thoai" class="form-label">Điện thoại</label>
        <input type="text" class="form-control" id="dien_thoai" name="dien_thoai" value="">
        
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="">
        
    </div>
    
    <button type="submit" class="btn btn-primary">Nhà cung cấp</button>
    <a class="btn btn-primary" href="{{ route("suplliers.index")}}">Trở lại</a>
</form>
@endsection