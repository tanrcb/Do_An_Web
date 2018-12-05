<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
class LoaispController extends Controller
{
    public function getListLoai(){
    	$theloai = ProductType::all();
    	return view('p_admin.loaisp.listloai',compact('theloai'));
    }
     public function getThemLoai(){
    	
    	return view('p_admin.loaisp.themloai');
    }

    public function postThemLoai(Request $req){
    	$this->validate($req,
    		[
    			'name' => 'required|unique:type_product,name|min:3|max:100' 
    		],
    		[
    			'name.required' => 'Bạn chưa nhập tên loại',
                'name.unique' => 'Bạn đã nhập trùng',
    			'name.min' => 'Tên loại hơn 3 ký tự đến 100 ký tư',
    			'name.max' => 'Tên loại tối đa 100 ký tự',
    		]);

    	$theloai = new ProductType;
    	$theloai->name = $req->name;
    	$theloai->save();

    	return redirect('p_admin/loaisp/themloai')->with('thongbao','Succesfull');

    }

    public function getSuaLoai($id){
    	$theloai = ProductType::find($id);
    	return view('p_admin.loaisp.sualoai',compact('theloai'));
    }

    public function postSuaLoai(Request $req, $id){
        $theloai = ProductType::find($id);
        $this->validate($req,
            [
                'name' => 'required|unique:type_product,name|min:3|max:100'
            ],
            [
                'name.required' => 'Bạn chưa nhập tên loại',
                'name.unique' => 'Bạn đã nhập trùng',
                'name.min' => 'Tên loại hơn 3 ký tự đến 100 ký tư',
                'name.max' => 'Tên loại tối đa 100 ký tự',
            ]);
        $theloai->name = $req->name;
        $theloai->save();

        return redirect('p_admin/loaisp/sualoai/'.$id)->with('thongbao','Succesfull');
    }

    public function getXoaLoai($id){
        $theloai = ProductType::find($id);
        $theloai -> delete();
        return redirect('p_admin/loaisp/listloai')->with('thongbao','Xóa thành công!');
    }
}
