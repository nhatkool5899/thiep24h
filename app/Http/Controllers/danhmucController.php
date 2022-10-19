<?php

namespace App\Http\Controllers;

use App\Models\danhmuc;
use Illuminate\Http\Request;

class danhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmuc = danhmuc::orderBy('id','DESC')->get();
        return view('admin.danhmuc.index', compact('danhmuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.danhmuc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'tendanhmuc' => 'required|unique:tbl_danhmuc',
            'slug' => 'required|unique:tbl_danhmuc'
            ],
            [
                'tendanhmuc.required' => 'Tên không thể trống',
                'tendanhmuc.unique' => 'Tên đã tồn tại',
                'slug.required' => 'Slug không thể trống',
                'slug.unique' => 'Slug đã tồn tại',
            ]
        );

        $data = $request->all();
        $danhmuc = new danhmuc();
        $danhmuc->tendanhmuc = $data['tendanhmuc'];
        $danhmuc->slug = $data['slug'];

        $danhmuc->save();
        return redirect('/danhmuc');
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
        $danhmuc = danhmuc::find($id);
        return view('admin.danhmuc.edit',compact('danhmuc'));
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
        $data = $request->validate([
            'tendanhmuc' => 'required',
            'slug' => 'required'
            ],
            [
                'tendanhmuc.required' => 'Tên không thể trống',
                'slug.required' => 'Slug không thể trống',
            ]
        );

        $data = $request->all();
        $danhmuc = danhmuc::find($id);
        $danhmuc->tendanhmuc = $data['tendanhmuc'];
        $danhmuc->slug = $data['slug'];

        $danhmuc->save();
        
        return redirect('/danhmuc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        danhmuc::find($id)->delete();
        return redirect()->back()->with('status','Xóa thành công');
    }
}
