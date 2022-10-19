@extends('layouts.admin')
@section('content')

{{-- Form --}}
<div class=" management">

    <form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="header">
            <div class="title">Add Banner </div>
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
                    <select id="custom-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            <div class="form-add">
                <div class="title">Image:</div>
                <div class="custom-file">
                    <input type="hidden" name="location" id="input-location" value="">
                    <input type="file" accept="image/*" name="img" class="custom-input-file" id="inputImg"/>
                    <label for="inputImg" class="custom-label">Upload Images</label>
                </div>
                <div class="img-preview"><img id="img-preview" src="" alt=""></div>
            </div>
        </div>
    </form>
</div>

@endsection