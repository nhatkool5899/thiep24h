@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class="container management">

    <div class="header">
        <div class="title">Quản lý sản phẩm: <span style="font-size: 14px">{{$count}} items</span></div>
        <div><a href="{{route('sanpham.create')}}" class="btn-add"><ion-icon name="add-outline"></ion-icon> Thêm sản phẩm</a></div>
    </div>
    <div class="box-mng">
        <ul class="mng-list">
            <li class="mng-item row">
                <div class="col-md-1">STT</div>
                <div class="col-md-2">Mã số</div>
                <div class="col-md-2">Tên danh mục</div>
                <div class="col-md-2">Price</div>
                <div class="col-md-2">Action</div>
            </li>
            @foreach ($sanpham as $item => $value)
                <li class="mng-item row">
                    <div class="col-md-1">{{ $item+1 }}</div>
                    <div class="col-md-2">{{ $value->maso }}</div>
                    <div class="col-md-2">{{ $value->danhmuc->tendanhmuc }}</div>
                    <div class="col-md-2">{{number_format($value->gia,0,',','.')}} VNĐ</div>
                    <div class="col-md-2">

                        <a href="{{route('sanpham.edit',['sanpham' => $value->id])}}" class="icon-edit"><ion-icon name="brush-outline"></ion-icon></a>
                        <form action="{{route('sanpham.destroy',['sanpham' => $value->id])}}" method="post" style="display: inline-block">
                            @method("DELETE")
                            @csrf
                            <button class="icon-delete" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </div>
                </li>
                
            @endforeach

        </ul>
        <div class="qty-item"><span>{{$item+1}} items</span></div>
    </div>
</div>

@endsection