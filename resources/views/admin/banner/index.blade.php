@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class="container management">

    <div class="header">
        <div class="title">Banner List:</div>
        <div><a href="{{route('banner.create')}}" class="btn-add"><ion-icon name="add-outline"></ion-icon> Add Banner</a></div>
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
                <div class="col-md-2">Location</div>
                <div class="col-md-4">Image</div>
                <div class="col-md-2">Created At</div>
                <div class="col-md-3">View/Edit/Delete</div>
            </li>
            @foreach ($banner as $item => $value)
                <li class="mng-item row">
                    <div class="col-md-1">{{ $item+1 }}</div>
                    <div class="col-md-2">{{ $value->location }}</div>
                    <div class="col-md-4"><img src="{{asset('uploads/banner/'.$value->img)}}" width="250" alt="{{ $value->img }}"></div>
                    <div class="col-md-2">{{ $value->created_at }}</div>
                    <div class="col-md-3">
                        <a href="{{route('banner.edit', ['banner' => $value->id])}}" class="icon-edit"><ion-icon name="brush-outline"></ion-icon></a>
            
                        <form action="{{route('banner.destroy',['banner' => $value->id])}}" method="post" style="display: inline-block">
                            @method("DELETE")
                            @csrf
                            <button class="icon-delete" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><ion-icon name="trash-outline"></ion-icon></button>
                        </form>
                    </div>
                </li>
            @endforeach

        </ul>
        <div class="qty-item"><span>5 items</span></div>
    </div>
</div>




@endsection