@extends('layouts.pages')
@section('content')
<div class="clearfix"></div>
    <div class="pd-details">
        <div class="container">
            <div class="row" style="justify-content: center">
                <div class="col-md-5">
                    <div class="pd-details-img">
                        <img src="{{asset('uploads/'.$sanpham->danhmuc->tendanhmuc.'/'.$sanpham->hinhanh)}}" alt="{{$sanpham->hinhanh}}">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="details-top">
                        <div class="name">{{ $sanpham->danhmuc->tendanhmuc }}</div>
                        <div class="time">[Cập nhật lúc: {{ $sanpham->created_at }}]</div>
                        <div class="share">
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
                        </div>
                    </div>
                    <div class="details-middle">
                        <div class="price">Giá: Liên hệ</div>
                        <div class="desc"><span>Mã số:</span> {{ $sanpham->maso }}</div>
                        <div class="desc"><span>Loại:</span> Thiệp đứng</div>
                        <div class="desc"><span>Chất liệu:</span> For indo</div>
                        <div class="desc"><span>Kỹ thuật in:</span> in phun</div>
                    </div>

                    <div class="order-online">
                        <div class="title">Phương thức đặt hàng online</div>
                        <ul>
                            <li>1. Tham khảo chọn mẫu</li>
                            <li>2. Gửi thông tin cưới (thiết kế form, điền thông tin và gửi demo)</li>
                            <li>3. Duyệt tương tác kiểm tra demo</li>
                            <li>4. KHÔNG CẦN ĐẶT CỌC</li>
                            <li>5. Cung cấp thông tin người nhận</li>
                            <li>6. Nhận hàng</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection