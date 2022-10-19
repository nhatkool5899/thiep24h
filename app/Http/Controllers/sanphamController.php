<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use App\Models\sanpham;
use Illuminate\Http\Request;

class sanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = sanpham::with('danhmuc')->orderBy('id','DESC')->get();
        $count = count($sanpham);
        return view('admin.sanpham.index', compact('sanpham','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = danhmuc::orderBy('id','ASC')->get();
        return view('admin.sanpham.create', compact('danhmuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'maso' => 'required|unique:tbl_sanpham',
                'hinhanh' => 'required',
                'gia' => 'required'
            ],

            [
                'maso.required' => 'Mã số không thể trống',
                'gia.required' => 'Hình ảnh không thể trống',
                'hinhanh.required' => 'Giá không thể trống',
                'maso.unique' => 'Mã số đã tồn tại',
            ]
    
        );

        $data = $request->all();
        $sanpham = new sanpham();
        $sanpham->maso = $data['maso'];
        $sanpham->danhmuc_id = $data['danhmuc_id'];
        $sanpham->gia = $data['gia'];

        $get_img = $request->file('hinhanh');
        $danhmuc = danhmuc::find($sanpham->danhmuc_id);
        
        // $get_name_image = $get_img->getClientOriginalName();
        // $name_image = current(explode('.', $get_name_image));
        $new_image = $sanpham->maso.'-'.rand(0,99).'.'.$get_img->getClientOriginalExtension();

        $path = 'uploads/' . $danhmuc->tendanhmuc;

        $get_img->move($path, $new_image);

        $sanpham->hinhanh = $new_image;

        $sanpham->save();

        return redirect('/sanpham');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sanpham = sanpham::find($id);
        return view('admin.sanpham.edit',compact('sanpham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'maso' => 'required',
                'gia' => 'required'
            ],

            [
                'maso.required' => 'Mã số không thể trống',
                'gia.required' => 'Hình ảnh không thể trống'
            ]
    
        );

        $data = $request->all();
        $sanpham = sanpham::find($id);
        $sanpham->maso = $data['maso'];
        $sanpham->danhmuc_id = $data['danhmuc_id'];
        $sanpham->ten = $data['ten'];
        $sanpham->gia = $data['gia'];

        $get_img = $request->file('hinhanh');

        if($get_img){
            $danhmuc = danhmuc::find($sanpham->danhmuc_id);
            $path = 'uploads/'.$danhmuc->tendanhmuc.$sanpham->hinhanh;
            if(file_exists($path)){
                unlink($path);
            }
            $get_name_image = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.'-'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
    
            
            $path = 'uploads/' . $danhmuc->tendanhmuc;
    
            $get_img->move($path, $new_image);
    
            $sanpham->hinhanh = $new_image;
    
            $sanpham->save();
        }else{
            $sanpham->save();
        }
        

        return redirect('/sanpham');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanpham = sanpham::find($id);
        $danhmuc = danhmuc::find($sanpham->danhmuc_id);
        $path = 'uploads/'.$danhmuc->tendanhmuc.$sanpham->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        sanpham::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa banner thành công');
    }
}
