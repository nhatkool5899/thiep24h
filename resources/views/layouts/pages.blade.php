<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('front-end/css/splide.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/sweetalert.css')}}">

    <link rel="stylesheet" href="{{asset('front-end/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/css/responsive.css')}}">
</head>
<body>
    
    <div id="preloader">
        <h4>Đang gửi thông tin</h4>
        <h5>Vui lòng chờ...</h5>
    </div>

    <div class="app">
        <header>
            <div class="header">
                <div class="header_top">
                    <div class="container header_top-main">
                        <div class="header_top-address">
                            <i class="fa-solid fa-location-dot"></i><span>41D/3 Trung Mỹ Tây 2, P. Trung Mỹ Tây , Q. 12, Hồ Chí Minh</span>
                        </div>
                        <div class="header_top-phone">
                            <i class="fa-solid fa-phone-volume"></i>
                            <a target="_blank" href="https://zalo.me/0942621003">: 0942621003</a>
                        </div>
                        <div class="header_top-social">
                            <a target="_blank" href="https://www.facebook.com/inangiarequan12">
                                <span>
                                    <i class="fa-brands fa-facebook"></i>
                                </span>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/inangiarequan12">
                                <span>
                                    <i class="fa-brands fa-instagram"></i>
                                </span>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/inangiarequan12">
                                <span>
                                    <i style="font-size: 1.6em;" class="fa-brands fa-youtube"></i>
                                </span>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/inangiarequan12">
                                <span>
                                    <i class="fa-brands fa-tiktok"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header_middle">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <a href="" class="logo">
                                    <img src="{{asset('front-end/imgs/logo.png')}}" alt="logo">        
                                </a>
                            </div>
                            <div class="col-lg-6">
                                <div class="header_search">
                                    <div class="header_search-text">"Tìm những tấm thiệp xinh xắn cho ngày hạnh phúc nhất của bạn "</div>
                                    <div class="search">
                                        <input type="text" id="keyword" placeholder="Nhập từ khóa cần tìm...">
                                        <button class="btn"><i class="fas fa-search"></i></button>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="hotline">
                                    <img src="{{asset('front-end/imgs/bg-phone.png')}}" alt="">
                                    <div style="margin-left: 0.8em;">
                                        <div><span>Hotline:</span></div>
                                        <div class="hotline-text"><span>0942621003</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="line-left"></div>
                    <div class="container">
                        <div class="navbar-menu">
                            <div class="pd-menu">
                                <div class="pd-menu-title">
                                    <div class="pd-menu-icon"><i class="fas fa-bars"></i></div>
                                    <div class="pd-menu-text">Danh mục sản phẩm</div>
                                </div>
                                <!-- <div class="drop-menu">
                                    <ul class="sub-menu">
                                        <li><a href="thiep-cuoi-mau-moi">THIỆP CƯỚI MẪU MỚI</a>
                                            <ul>
                                                <li>
                                                    <a href="mau-thiep-dung">Mẫu Thiệp Đứng</a>
                                                </li>
                                                <li>
                                                    <a href="mau-thiep-ngang">Mẫu Thiệp Ngang</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="thiep-cuoi-in-hinh-dau-re">THIỆP CƯỚI IN HÌNH DÂU RỂ</a>
                                        </li>
                                        <li>
                                            <a href="thiep-cuoi-sang-tao">THIỆP CƯỚI HIỆN ĐẠI</a>
                                            <ul>
                                                <li>
                                                    <a href="dong-pd">Dòng PD</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="thiep-cuoi-gia-re">THIỆP CƯỚI GIÁ RẺ</a>
                                            <ul>
                                                <li>
                                                    <a href="mau-dung">Mẫu Đứng</a>
                                                </li>
                                                <li>
                                                    <a href="thiep-mau-ngang">Thiệp Mẫu Ngang</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="thiep-cuoi-giay-my-thuat">THIỆP CƯỚI GIẤY MỸ THUẬT</a>
                                        </li>
                                        <li>
                                            <a href="thiep-cuoi-dq">THIỆP CƯỚI DQ</a>
                                        </li>
                                    </ul>            
                                </div> -->
                            </div>
                            <div class="nav-menu">
                                
                                <ul class="menu--left nav-menu-list menu_desktop">
                                    <li class="nav-menu-item">
                                        <a class="menu__link--home menu__link active" href="" title="Trang chủ">Trang chủ</a>
                                    </li>
                                    <li class="menu__line"></li>
                                    <li class="nav-menu-item">
                                        <a class="menu__link " href="gioi-thieu" title="Giới thiệu">Giới thiệu</a>
                                    </li> 
                                    <li class="menu__line"></li>
                                    <li class="nav-menu-item">
                                        <a class="menu__link " href="khuyen-mai" title="Khuyến mãi">Khuyến mãi</a>
                                    </li> 
                                    <li class="menu__line"></li>
                                    <li class="nav-menu-item">
                                        <a class="menu__link " href="thu-vien-anh" title="Album">Album</a>
                                    </li>
                                    <li class="menu__line"></li>
                                    <li class="nav-menu-item">
                                        <a class="menu__link " href="tin-tuc" title="Tin tức">Tin tức</a>
                                    </li> 
                                    <li class="menu__line"></li>
                                    <li class="nav-menu-item">
                                        <a class="menu__link " href="lien-he" title="Liên hệ">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('slider')

        

        @yield('content')


        <div style="height:10em"></div>
        
        <div class="clearfix"></div>
        <div class="contact">
            <div class="container">
                <div class="contact-body">

                    <div class="row">
                        <div class="col-md-6 ct-layout" style="background: var(--primary-color);">
                            <div class="contact-left">
                                <div class="title">
                                    <h4>Thông tin liên hệ</h4>
                                    <p>Thiệp cưới abc</p>
                                </div>

                                <ul class="info">
                                    <li>Địa chỉ: 41D/3 Trung Mỹ Tây 2, P. Trung Mỹ Tây, Q.12, TP. HCM</li>
                                    <li>Hotline: 0377.0178.71 - 094.2621.003</li>
                                    <li>Gmail: hp.8783@gmail.com</li>
                                    <li>Website: inthiepcuoiquan12.com</li>
                                </ul>

                                <div class="social">
                                    <div class="title">Mạng xã hội:</div>
                                    <div class="icon">
                                        <div class="icon-item"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                                        <div class="icon-item"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                                        <div class="icon-item"><a href="#"><i class="fa-brands fa-youtube"></i></a></div>
                                        <div class="icon-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 ct-layout">
                            <div class="contact-right">
                                <div class="title">
                                    GỬI THÔNG TIN LIÊN HỆ
                                </div>
                                <p class="alert-ct">Vui lòng nhập vào form bên dưới để chúng tôi tư vấn cho bạn!</p>
                                <div class="contact-form">
                                    <form action="" class="row">
                                        @csrf
                                        <div class="col-md-6 inputItem">
                                            <label for="inputName" class="form-label">Tên của bạn:</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Nhập tên của bạn">
                                        </div>
                                        <div class="col-md-6 inputItem">
                                            <label for="inputPhone" class="form-label">Số điện thoại:</label>
                                            <input type="number" class="form-control" id="inputPhone" placeholder="Nhập số điện thoại của bạn">
                                        </div>
                                        <div class="col-12 inputItem">
                                            <label for="inputAddress" class="form-label">Địa chỉ:</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="Nhập địa chỉ của bạn">
                                        </div>
                                        <div class="col-12 inputItem">
                                            <label for="inputMessage" class="form-label">Lời nhắn:</label>
                                            <input type="text" class="form-control" id="inputMessage" placeholder="Nhập lời nhắn của bạn">
                                        </div>
                                        
                                        <span class="btn-ct-submit col-3">Đăng Kí</span>
                                    </form>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

       

        <footer>
            <div class="footer">
                <div class="container">
                    <div class="ft-body">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <div class="ft-item">
                                    <div class="title">Giới thiệu</div>
                                    <ul>
                                        <li><a href="#">Về chúng tôi</a></li>
                                        <li><a href="#">Sản phẩm</a></li>
                                        <li><a href="#">Khuyến mãi</a></li>
                                        <li><a href="#">Chuyện về thiệp</a></li>
                                        <li><a href="#">Tuyển dụng</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="ft-item">
                                    <div class="title">Điều khoản</div>
                                    <ul>
                                        <li><a href="#">Điều khoản sử dụng</a></li>
                                        <li><a href="#">Bảo mật</a></li>
                                        <li><a href="#">Bản quyền</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="ft-item">
                                    <div class="title">Đặt hàng ngay</div>
                                    <ul>
                                        <li><i class="fa-solid fa-phone"></i> Hotline: <a href="tel:090">079807198</a></li>
                                        <li><i class="fa-solid fa-location-dot"></i> Địa chỉ: <span>Tầng 3-4 Hub Building
                                            195/10E Điện Biên Phủ, P.15 ,
                                            Q.Bình Thạnh, TP.Hồ Chí Minh</span></li>
                                    </ul>
                                    
                                </div>
                            </div>
                            <div class="col-md-3 col-6"><img src="{{asset('front-end/imgs/ft-demo.PNG')}}" alt=""></div>
                        </div>

                        <hr>
                        <div class="text-center"><span style="font-size: 13px;">© Copyright 2022 Batman - VietNam & Macchiato</span></div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=396469165987143&autoLogAppEvents=1" nonce="XftFxqfg"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('front-end/js/splide.min.js')}}"></script>
    <script src="{{asset('front-end/js/sweetalert.js')}}"></script>
    <script src="{{asset('front-end/js/main.js')}}"></script>

    
<script>
    var splide = new Splide( '.splide',{
        type: "loop",
        pagination: false,
        autoplay: true,
        interval: 2000,

    });
    var bar = splide.root.querySelector( '.my-slider-progress-bar' );
    
    // Updates the bar width whenever the carousel moves:
    splide.on( 'mounted move', function () {
      var end  = splide.Components.Controller.getEnd() + 1;
      var rate = Math.min( ( splide.index + 1 ) / end, 1 );

      bar.style.width = String( 100 * rate ) + '%';

    } );
    
    splide.mount();
</script>

<script>
    $('.vertical-slide').slick({
        vertical: true,
        verticalSwiping: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [{
          breakpoint: 500,
          settings: {
            vertical: false
          }
        }]
    });


    $('.slider-left-sublist').hide();
    $('ul.slider-left-list > li, .slider-left-sublist > li').hover(function () {
    if ($('> .slider-left-sublist',this).length > 0) {
        $('> .slider-left-sublist',this).stop().slideDown('slow');
    }
    },function () {
        if ($('> .slider-left-sublist',this).length > 0) {
            $('> .slider-left-sublist',this).stop().slideUp('slow');
        }
    });
</script>

</body>
</html>