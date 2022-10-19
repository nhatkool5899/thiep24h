@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class=" management">
    <form action="{{route('sanpham.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="header">
            <div class="title">Thêm sản phẩm</div>
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
                    <label class="col-sm-2 col-form-label">Danh mục sản phẩm:</label>
                    <div class="col-sm-6">
                        <select name="danhmuc_id" class="form-select">
                            @foreach ($danhmuc as $item => $value)

                             <option value="{{$value->id}}">{{$value->tendanhmuc}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-add">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Mã số:</label>
                    <div class="col-sm-6">
                        <input type="text" name="maso" value="{{old('maso')}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-add">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Giá:</label>
                    <div class="col-sm-6">
                        <input type="number" name="gia" value="{{old('gia')}}" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-add">
                <div class="row">
                    <label for="price" class="col-sm-2 col-form-label">Hình ảnh:</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" accept="image/*" name="hinhanh" class="custom-input-file" id="inputImg"/>
                            <label for="inputImg" class="custom-label">Upload Images</label>
                        </div>
                        <div class="img-preview"><img id="img-preview" src="" alt=""></div>
                    </div>
                </div>
            </div>
                
        </div>
    </form>
</div>

@endsection