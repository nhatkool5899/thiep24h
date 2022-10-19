@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class=" management">

    <form action="{{route('banner.update', ['banner' => $banner->id])}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="header">
            <div class="title">Edit Banner </div>
            <div><button id="btn-add-banner" class="btn btn-save btn-add"><ion-icon name="save-outline"></ion-icon> Confirm</button></div>
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
                <div class="title">Location:</div>
                <div>
                    <select name="location" style="width: 260px;height: 34px;padding-left: 10px;border-color:#ccc">
                        <option <?php if($banner->location == 1) echo 'selected' ?>  value="1">1</option>
                        <option <?php if($banner->location == 2) echo 'selected' ?> value="2">2</option>
                        <option <?php if($banner->location == 3) echo 'selected' ?> value="3">3</option>
                        <option <?php if($banner->location == 4) echo 'selected' ?> value="4">4</option>
                    </select>
                </div>
            </div>
            <div class="form-add">
                <div class="title">Image:</div>
                <div class="custom-file">

                    <input type="file" accept="image/*" name="img" class="custom-input-file" id="inputImg"/>
                    <label for="inputImg" class="custom-label">Upload Images</label>
                </div>
                <div class="img-preview"><img id="img-preview" src="{{asset("uploads/banner/".$banner->img)}}" alt="banner"></div>
            </div>
        </div>
    </form>
</div>

@endsection