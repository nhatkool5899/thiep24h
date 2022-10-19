@extends('layouts.pages')
@section('content')

<div class="breadcrumbs">
    <ul>
        <li><a href="">Trang chủ</a> </li>
        <li><a href="">Sản phẩm</a> </li>
    </ul>
</div>
<div class="clearfix"></div>
<!-- Ngày lễ -->
<div class="container">
    <div class="category-pd">
        <h3 class="cate-title">Mẫu thiệp ngày lễ</h3>

        <div class="cate-body">

            @foreach ($sanpham as $item)
                
            <div class="cate-pd-item">
                <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                        </p>
                    </a>
                    <div class="info">
                        <div class="name">
                            <span>
                                {{$item->maso}}
                            </span>
                            <span class="like">
                                {{-- <i class="fa-solid fa-heart"></i> --}}
                                <i class="fa-regular fa-heart"></i>
                            </span>
                        </div>
                        <div class="rate">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            {{-- <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i> --}}
                            
                        </div>
                    </div>
                    <div class="price">{{ number_format($item->gia,0,',','.') }}₫</div>
            </div>

            @endforeach

        </div>

    </div>
</div>
@endsection