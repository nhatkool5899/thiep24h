<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\sanpham;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $thiepcuoi_moi = sanpham::with('danhmuc')->where('danhmuc_id',1)->orderBy('id','desc')->take(10)->get();
        $thiepsinhnhat_moi = sanpham::with('danhmuc')->where('danhmuc_id', 14)->orderBy('id','desc')->take(10)->get();
        $thieptet = sanpham::with('danhmuc')->where('danhmuc_id', 11)->orderBy('id','desc')->take(10)->get();
        $thiep8_3 = sanpham::with('danhmuc')->where('danhmuc_id', 2)->orderBy('id','desc')->take(3)->get();
        $thiep14_2 = sanpham::with('danhmuc')->where('danhmuc_id', 3)->orderBy('id','desc')->take(3)->get();
        $thiep20_11 = sanpham::with('danhmuc')->where('danhmuc_id', 4)->orderBy('id','desc')->take(3)->get();
        $thiep_noel = sanpham::with('danhmuc')->where('danhmuc_id', 12)->orderBy('id','desc')->take(10)->get();

        return view('pages.home', compact('thiepcuoi_moi','thiepsinhnhat_moi','thiep8_3','thiep14_2','thiep20_11','thieptet','thiep_noel'));
    }

    public function details_pd($slug)
    {   $sanpham = sanpham::with('danhmuc')->where('maso',$slug)->first();

        return view('pages.details',compact('sanpham'));
    }

    public function category_pd($slug)
    {
        $cate = danhmuc::where('slug', $slug)->first();
        $sanpham = sanpham::with('danhmuc')->where('danhmuc_id', $cate->id)->get();
        return view('pages.category', compact('sanpham', 'cate'));
    }
}
