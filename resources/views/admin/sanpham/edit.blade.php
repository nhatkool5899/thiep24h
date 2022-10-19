@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class=" management">
    <form action="{{route('drinks.update',['drink' => $drink->id])}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="header">
            <div class="title">Edit Product</div>
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
                <div class="row">
                    <label class="col-sm-2 col-form-label">Product Type:</label>
                    <div class="col-sm-6">
                        <select name="cat_id" class="form-control">
                            @foreach ($category as $item => $value)

                             <option <?php if($drink->cat_id == $value->id) echo "selected" ?> value="{{$value->id}}">{{$value->name}}</option>
                                
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-add">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Product Name:</label>
                    <div class="col-sm-6">
                        <input type="text" name="name" value="{{$drink->name}}" class="form-control" onkeyup="ChangeToSlug()" id="slug">
                    </div>
                </div>
            </div>
            <div class="form-add">
                <div class="row">
                    <label class="col-sm-2 col-form-label">Slug:</label>
                    <div class="col-sm-6">
                        <input type="text" name="slug" value="{{$drink->slug}}" id="convert_slug" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-add">
                <div class="row">
                    <label for="price" class="col-sm-2 col-form-label">Price:</label>
                    <div class="col-sm-6">
                        <input type="text" name="price" value="{{$drink->price}}" id="price" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-add">
                <div class="row">
                    <label for="price" class="col-sm-2 col-form-label">Image:</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="hidden" name="location" id="input-location" value="">
                            <input type="file" accept="image/*" name="img" class="custom-input-file" id="inputImg"/>
                            <label for="inputImg" class="custom-label">Upload Images</label>
                        </div>
                        <div class="img-preview"><img id="img-preview" src="{{asset('uploads/drinks/'.$drink->img)}}" alt="{{$drink->img}}"></div>
                    </div>
                </div>
            </div>
                
        </div>
    </form>
</div>

@endsection