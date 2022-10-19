@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class="container management">

    <div class="header">
        <div class="title">Danh sách danh mục:</div>
        <div><a href="{{route('danhmuc.create')}}" class="btn-add"><ion-icon name="add-outline"></ion-icon> Tạo danh mục</a></div>
    </div>
    <div class="box-mng">
        @if (session('status'))
            <div class="alert alert-success" style="margin-left: 0">
                {{ session('status') }}
            </div>
        @endif
        <ul class="mng-list">
            <li class="mng-item row">
                <div class="col-md-1">STT</div>
                <div class="col-md-3">Tên danh mục</div>
                <div class="col-md-3">Created At</div>
                <div class="col-md-3">Edit/Delete</div>
            </li>
            @foreach ($danhmuc as $item => $value)
                <li class="mng-item row">
                    <div class="col-md-1">{{ $item+1 }}</div>
                    <div class="col-md-3">{{ $value->tendanhmuc }}</div>
                    <div class="col-md-3">{{ $value->created_at }}</div>
                    <div class="col-md-3">
                        <a href="{{route('danhmuc.edit', ['danhmuc' => $value->id])}}" class="icon-edit"><ion-icon name="brush-outline"></ion-icon></a>
            
                        <form action="{{route('danhmuc.destroy',['danhmuc' => $value->id])}}" method="post" style="display: inline-block">
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