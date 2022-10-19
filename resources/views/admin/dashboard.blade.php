@extends('layouts.admin')
@section('content')
 
 <!-- Cards -->
 <div class="cardBox">
    <div class="card">
        <div>
            <div class="numbers"></div>
            <div class="cardName">News Items</div>
        </div>
        <div class="image">
            <img src="{{asset('back-end/imgs/banner-logo.jpg')}}" alt="banner-logo">
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers"></div>
            <div class="cardName">Foods Items</div>
        </div>
        <div class="image">
            <img src="{{asset('back-end/imgs/foods-logo.jpg')}}" alt="foods-logo">
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers"></div>
            <div class="cardName">Drinks Items</div>
        </div>
        <div class="image">
            <img src="{{asset('back-end/imgs/drink-logo-1.jpeg')}}" alt="drink-logo">
        </div>
    </div>
    <div class="card">
        <div>
            <div class="numbers"></div>
            <div class="cardName">Product In The Store</div>
        </div>
        <div class="image">
            <img src="{{asset('back-end/imgs/thit-dong-lanh.jpg')}}" alt="product-logo">
        </div>
    </div>
</div>

<!-- Order Details list -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>New Product</h2>
            <a href="#" class="btn">View all</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Created_at</td>
                    <td>Type</td>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($arraySort as $item => $value)
                    <tr>
                        <td>{{$value['name']}}</td>
                        <td>{{number_format($value['price'],0,',','.')}}</td>
                        <td class="datetime">{{$value['created_at']->diffForHumans()}}</td>
                        @if ($value['type'] == 'Foods')
                        <td><span class="status red">{{$value['type']}}</span></td>  
                        @elseif($value['type'] == 'Drinks')
                        <td><span class="status yellow">{{$value['type']}}</span></td>  
                        @elseif($value['type'] == 'Store')
                        <td><span class="status green">{{$value['type']}}</span></td>  
                        @endif
                    </tr>                 
                @endforeach --}}

            </tbody>
        </table>
    </div>

    <!-- New customer -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Staff</h2>
        </div>
        <table>
            <tr>
                <td width="60px">
                    <div class="imgBx">
                        <img src="{{asset('back-end/imgs/img1.jpg')}}" alt="">
                    </div>
                </td>
                <td>
                    <h4>Thiên Ân</h4>
                    <span>Nghệ An</span>
                </td>
            </tr>
            <tr>
                <td width="60px">
                    <div class="imgBx">
                        <img src="{{asset('back-end/imgs/img2.jpg')}}" alt="">
                    </div>
                </td>
                <td>
                    <h4>Phương Nhi</h4>
                    <span>Thanh Hóa</span>
                </td>
            </tr>
            <tr>
                <td width="60px">
                    <div class="imgBx">
                        <img src="{{asset('back-end/imgs/img3.jpg')}}" alt="">
                    </div>
                </td>
                <td>
                    <h4>Thiên Hương</h4>
                    <span>Vĩnh Long</span>
                </td>
            </tr>
            <tr>
                <td width="60px">
                    <div class="imgBx">
                        <img src="{{asset('back-end/imgs/img4.jpg')}}" alt="">
                    </div>
                </td>
                <td>
                    <h4>Hồng Hạnh</h4>
                    <span>Thái Bình</span>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection