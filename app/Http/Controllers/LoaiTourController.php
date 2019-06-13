<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\LoaiTour;

class LoaiTourController extends Controller
{
    //
    public function getList(){
        $loaitour = LoaiTour::all();
        return view('admin.loaitour.list',['loaitour'=>$loaitour]);
    }

    public function getAdd(){
        return view('admin.loaitour.add');
    }
    public function postAdd(Request $request){
        $this->validate($request,
        ['ten'=>'required|min:3|max:20'],
        ['ten.required'=>'Chưa nhập tên loại tour',
         'ten.min'=>'Tên phải lớn hơn 3 kí tự',
         'ten.max'=>'Tên phải bé hơn 20 kí tự']
        );

        $loaitour = new LoaiTour;
        $loaitour->ten = $request->ten;
        // $loaitour->tenkhongdau = changeTitle($request->ten);
        $loaitour->save();
        return redirect('admin/loaitour/add')->with('thongbao','Thêm thành công');
    }

    public function getEdit(){
        return view('admin.loaitour.edit');
    }
}
