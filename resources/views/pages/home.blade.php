@extends('layouts.pages')
@section('slider')
    @include('layouts.slider')
@endsection

@section('content')
    
<main>

    <!-- Thiệp cưới mới -->
    <div class="box_news container">
        <div class="pd-title">
            <img src="{{asset('front-end/imgs/icon-1.jpg')}}" alt="">
            <div class="pd-title-text">
                <h3 class="title-hover">Mẫu thiệp cưới mới</h3>
                <p>Các mẫu thiệp cưới mới bên cửa hàng chúng tôi hiện nay đang kinh doanh</p>
            </div>
        </div>

        <div class="pd-news-carousel">
            @foreach ($thiepcuoi_moi as $item)

                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                        </p>
                    </a>
                    <div class="name">
                        {{$item->maso}}
                    </div>
                    <div class="price">{{ number_format($item->gia,0,',','.') }}đ</div>
                </div>
                
            @endforeach



        </div>

        <div class="box-view-all">
            <span class="btn-view-all">Xem tất cả</span>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- Thiệp sinh nhật mới -->
    <div class="box_news container">
        <div class="pd-title">
            <img src="{{asset('front-end/imgs/icon-2.png')}}" alt="">
            <div class="pd-title-text">
                <h3>Mẫu thiệp sinh nhật mới</h3>
                <p class="desc">Các mẫu thiệp cưới mới bên cửa hàng chúng tôi hiện nay đang kinh doanh</p>
            </div>
        </div>

        <div class="pd-news-carousel">
            @foreach ($thiepsinhnhat_moi as $item)

                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                        </p>
                    </a>
                    <div class="name">
                        {{$item->maso}}
                    </div>
                    <div class="price">{{ number_format($item->gia,0,',','.') }}đ</div>
                </div>
                
            @endforeach



        </div>

        <div class="box-view-all">
            <span class="btn-view-all">Xem tất cả</span>
        </div>
    </div>

    <div class="clearfix"></div>
     <!-- Ngày lễ -->
     <div class="box_news container">
        <div class="pd-title">
            <img src="{{asset('front-end/imgs/icon-4.png')}}" alt="">
            <div style="margin-top: 20px;">
                <h3>Mẫu thiệp ngày lễ</h3>
                <p>Một số dòng thiệp bán chạy nhất thị trương hiện nay</p>
            </div>
        </div>

        <div class="pd-news-carousel">
            @foreach ($thiep8_3 as $item)
            <!-- Item-carousel -->

            <div class="pd-carousel-item">
                <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                    <p class="scale-item">
                        <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                    </p>
                </a>
                <div class="name">
                    {{$item->maso}}
                </div>
                <div class="price">{{ number_format($item->gia,0,',','.') }}đ</div>
            </div>

            @endforeach
            @foreach ($thiep14_2 as $item)
            <!-- Item-carousel -->

            <div class="pd-carousel-item">
                <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                    <p class="scale-item">
                        <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                    </p>
                </a>
                <div class="name">
                    {{$item->maso}}
                </div>
                <div class="price">{{ number_format($item->gia,0,',','.') }}đ</div>
            </div>

            @endforeach
            @foreach ($thiep20_11 as $item)
            <!-- Item-carousel -->

            <div class="pd-carousel-item">
                <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                    <p class="scale-item">
                        <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                    </p>
                </a>
                <div class="name">
                    {{$item->maso}}
                </div>
                <div class="price">{{ number_format($item->gia,0,',','.') }}đ</div>
            </div>

            @endforeach

        </div>

        <div class="box-view-all">
            <span class="btn-view-all">Xem tất cả</span>
        </div>
    </div>


    <div class="clearfix"></div>
    <!-- Ngày lễ -->
    <div class="box_news container">
       <div class="pd-title">
           <img src="{{asset('front-end/imgs/icon-5.jpg')}}" alt="">
           <div style="margin-top: 20px;">
               <h3>Mẫu thiệp ngày tết</h3>
               <p>Một số dòng thiệp bán chạy nhất thị trương hiện nay</p>
           </div>
       </div>

       <div class="pd-news-carousel">
            @foreach ($thieptet as $item)
            <!-- Item-carousel -->

            <div class="pd-carousel-item">
                <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                    <p class="scale-item">
                        <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                    </p>
                </a>
                <div class="name">
                    {{$item->maso}}
                </div>
                <div class="price">{{ number_format($item->gia,0,',','.') }}đ</div>
            </div>

            @endforeach

       </div>

       <div class="box-view-all">
           <span class="btn-view-all">Xem tất cả</span>
       </div>
   </div>

   <div class="clearfix"></div>
    <!-- Giáng sinh -->
    <div class="box_news container">
       <div class="pd-title">
           <img src="{{asset('front-end/imgs/icon-5.jpg')}}" alt="">
           <div style="margin-top: 20px;">
               <h3>Mẫu thiệp giáng sinh</h3>
               <p>Một số dòng thiệp bán chạy nhất thị trương hiện nay</p>
           </div>
       </div>

       <div class="pd-news-carousel">
            @foreach ($thiep_noel as $item)
            <!-- Item-carousel -->

            <div class="pd-carousel-item">
                <a href="{{url('details-pd/'.$item->maso)}}" class="image pd-item-links">
                    <p class="scale-item">
                        <img src="{{asset('uploads/'.$item->danhmuc->tendanhmuc.'/'.$item->hinhanh)}}" alt="{{$item->hinhanh}}">
                    </p>
                </a>
                <div class="name">
                    {{$item->maso}}
                </div>
                <div class="price">{{ number_format($item->gia,0,',','.') }}đ</div>
            </div>

            @endforeach

       </div>

       <div class="box-view-all">
           <span class="btn-view-all">Xem tất cả</span>
       </div>
   </div>

    <div class="clearfix"></div>
    <div class="product-main">
        <div class="container">
            <div class="title">
                <img src="http://inthiepcuoiquan12.com/assets/images/idx-tit.png" alt="">
                <h3>Thiệp mẫu mới</h3>
            </div>
            <div class="pd-body">
                <div class="pd-nav-action">
                    <ul class="pd-nav-list">
                        <li class="pd-nav-item">
                            <a class="pd-nav-links active" href="#">Tất cả</a>
                        </li>
                        <li class="pd-nav-item">
                            <a class="pd-nav-links" href="#">Mẫu thiệp ngang</a>
                        </li>
                        <li class="pd-nav-item">
                            <a class="pd-nav-links" href="#">Mẫu thiệp đứng</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pd-main-carousel">
                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="#" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                        </p>
                    </a>
                    <div class="name">
                        GR 01
                    </div>
                    <div class="price">3.000đ</div>
                </div>

                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="#" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                        </p>
                    </a>
                    <div class="name">
                        GR 01
                    </div>
                    <div class="price">3.000đ</div>
                </div>

                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="#" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                        </p>
                    </a>
                    <div class="name">
                        GR 01
                    </div>
                    <div class="price">3.000đ</div>
                </div>

                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="#" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                        </p>
                    </a>
                    <div class="name">
                        GR 01
                    </div>
                    <div class="price">3.000đ</div>
                </div>

                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="#" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                        </p>
                    </a>
                    <div class="name">
                        GR 01
                    </div>
                    <div class="price">3.000đ</div>
                </div>

                <!-- Item-carousel -->
                <div class="pd-carousel-item">
                    <a href="#" class="image pd-item-links">
                        <p class="scale-item">
                            <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                        </p>
                    </a>
                    <div class="name">
                        GR 01
                    </div>
                    <div class="price">3.000đ</div>
                </div>
            </div>

            <div class="box-view-all">
                <span class="btn-view-all">Xem tất cả</span>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- why choose -->
    <div class="box-why-choose">
        <div class="container">
            <div class="header">
                <img src="http://inthiepcuoiquan12.com/assets/images/idx-tit2.png" alt="">
                <h3>Vì Sao Chọn Thiệp Cưới Phương Di</h3>
                <p>Những lý do bạn nên chọn thiệp cưới bên cửa hàng chúng tôi đang kinh doanh hiện nay</p>
            </div>
            <div class="why-choose-main">
                <div class="row">
                    <!-- Item -->
                    <div class="col-lg-3">
                        <div class="why-choose-item">
                            <a href="" class="why-choose-links">
                                <div class="head">
                                    <div class="circle-spin">
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="image"><img src="http://inthiepcuoiquan12.com/thumbs/70x70x2/upload/news/uy-tin-1157.png" alt=""></div>
                                </div>
                                <div class="body">
                                    <h5>Uy tín là vàng</h5>
                                    <div class="text">Phương Di khẳng định khách hàng đến với chúng tôi sẽ được phục vụ đúng với cam kết và còn nhiều hơn thế nữa</div>
                                    <div class="view-more">
                                        <span>Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End item -->

                     <!-- Item -->
                     <div class="col-lg-3">
                        <div class="why-choose-item">
                            <a href="" class="why-choose-links">
                                <div class="head">
                                    <div class="circle-spin">
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="image"><img src="http://inthiepcuoiquan12.com/thumbs/70x70x2/upload/news/uy-tin-1157.png" alt=""></div>
                                </div>
                                <div class="body">
                                    <h5>Uy tín là vàng</h5>
                                    <div class="text">Phương Di khẳng định khách hàng đến với chúng tôi sẽ được phục vụ đúng với cam kết và còn nhiều hơn thế nữa</div>
                                    <div class="view-more">
                                        <span>Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End item -->

                     <!-- Item -->
                     <div class="col-lg-3">
                        <div class="why-choose-item">
                            <a href="" class="why-choose-links">
                                <div class="head">
                                    <div class="circle-spin">
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="image"><img src="http://inthiepcuoiquan12.com/thumbs/70x70x2/upload/news/uy-tin-1157.png" alt=""></div>
                                </div>
                                <div class="body">
                                    <h5>Uy tín là vàng</h5>
                                    <div class="text">Phương Di khẳng định khách hàng đến với chúng tôi sẽ được phục vụ đúng với cam kết và còn nhiều hơn thế nữa</div>
                                    <div class="view-more">
                                        <span>Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End item -->

                     <!-- Item -->
                     <div class="col-lg-3">
                        <div class="why-choose-item">
                            <a href="" class="why-choose-links">
                                <div class="head">
                                    <div class="circle-spin">
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                        <div class="circle"></div>
                                    </div>
                                    <div class="image"><img src="http://inthiepcuoiquan12.com/thumbs/70x70x2/upload/news/uy-tin-1157.png" alt=""></div>
                                </div>
                                <div class="body">
                                    <h5>Uy tín là vàng</h5>
                                    <div class="text">Phương Di khẳng định khách hàng đến với chúng tôi sẽ được phục vụ đúng với cam kết và còn nhiều hơn thế nữa</div>
                                    <div class="view-more">
                                        <span>Xem thêm</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End item -->

                   
                </div>
            </div>
        </div>
    </div>

    <!-- Box-news -->
    <div class="box-news">
        <div class="container">
            <div class="header">
                <img src="http://inthiepcuoiquan12.com/assets/images/idx-tit2.png" alt="">
                <h3>Tin tức</h3>
                <p>Một số thông tin về các chương trình khuyến mãi bên cửa hàng được cập nhật liên tục</p>
            </div>
            <div class="news-body">
                <div class="news-carousel">
                    <!-- Item-carousel -->
                    <div class="news-carousel-item">
                        <a href="#" class="image pd-item-links">
                            <p class="scale-item">
                                <img src="http://inthiepcuoiquan12.com/thumbs/300x280x1/upload/news/6208209cffd50a8b53c418-7992.jpg" alt="">
                            </p>
                        </a>
                        <div class="body">
                            <div class="datetime">01/05/2022 10:56 PM</div>
                            <div class="title">Tiêu đề bài viết</div>
                            <div class="desc">Mô tả ngắn của bài viết sẽ ra sao nếu...</div>
                            <a href="#" class="read-more">Xem thêm<i style="margin-left: 6px;" class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>

                    <!-- Item-carousel -->
                    <div class="news-carousel-item">
                        <a href="#" class="image pd-item-links">
                            <p class="scale-item">
                                <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                            </p>
                        </a>
                        <div class="body">
                            <div class="datetime">01/05/2022 10:56 PM</div>
                            <div class="title">Tiêu đề bài viết</div>
                            <div class="desc">Mô tả ngắn của bài viết sẽ ra sao nếu...</div>
                            <a href="#" class="read-more">Xem thêm<i style="margin-left: 6px;" class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>

                    <!-- Item-carousel -->
                    <div class="news-carousel-item">
                        <a href="#" class="image pd-item-links">
                            <p class="scale-item">
                                <img src="http://inthiepcuoiquan12.com/thumbs/300x280x1/upload/news/fd53dedf0196f4c8ad8723-4699.jpg" alt="">
                            </p>
                        </a>
                        <div class="body">
                            <div class="datetime">01/05/2022 10:56 PM</div>
                            <div class="title">Tiêu đề bài viết</div>
                            <div class="desc">Mô tả ngắn của bài viết sẽ ra sao nếu...</div>
                            <a href="#" class="read-more">Xem thêm<i style="margin-left: 6px;" class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>

                    <!-- Item-carousel -->
                    <div class="news-carousel-item">
                        <a href="#" class="image pd-item-links">
                            <p class="scale-item">
                                <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                            </p>
                        </a>
                        <div class="body">
                            <div class="datetime">01/05/2022 10:56 PM</div>
                            <div class="title">Tiêu đề bài viết</div>
                            <div class="desc">Mô tả ngắn của bài viết sẽ ra sao nếu...</div>
                            <a href="#" class="read-more">Xem thêm<i style="margin-left: 6px;" class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>

                    <!-- Item-carousel -->
                    <div class="news-carousel-item">
                        <a href="#" class="image pd-item-links">
                            <p class="scale-item">
                                <img src="http://inthiepcuoiquan12.com/thumbs/240x270x1/upload/product/3123078c-1122-4648-843d-51962747566f-5117.jpeg" alt="">
                            </p>
                        </a>
                        <div class="body">
                            <div class="datetime">01/05/2022 10:56 PM</div>
                            <div class="title">Tiêu đề bài viết</div>
                            <div class="desc">Mô tả ngắn của bài viết sẽ ra sao nếu...</div>
                            <a href="#" class="read-more">Xem thêm<i style="margin-left: 6px;" class="fa-solid fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="clearfix"></div>

@endsection