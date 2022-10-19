@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class=" management">

    <form action="{{route('danhmuc.store')}}" method="post">
        @csrf
        <div class="header">
            <div class="title">Thêm danh mục</div>
            <div><button id="btn-add-banner" class="btn btn-save btn-add"><ion-icon name="save-outline"></ion-icon> Xác nhận</button></div>
        </div>
        <div class="box-add">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-add">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Tên danh mục:</label>
                    <div class="col-sm-6">
                        <input type="text" name="tendanhmuc" value="{{old('tendanhmuc')}}" class="form-control" onkeyup="ChangeToSlug()" id="slug">
                    </div>
                </div>
            </div>
            <div class="form-add">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Slug:</label>
                    <div class="col-sm-6">
                        <input type="text" name="slug" value="{{old('slug')}}" id="convert_slug" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection