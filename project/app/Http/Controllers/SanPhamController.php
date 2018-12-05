<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;
use App\Product;
class SanPhamController extends Controller
{
    public function getSanPham(){
    	$sanpham = Product::orderBy('id','DESC')->get();
    	return view('p_admin.sanpham.listsp',compact('sanpham'));
    }
     public function getThemSP(){
    	$theloai = ProductType::all();
    	return view('p_admin.sanpham.themsp',compact('theloai','sanpham'));
    }
    public function postThemSP(Request $req){
        $filename = $req->file('fImages')->getClientOriginalName();
        $product = new Product();
        $product->name = $req->txtName;
        $product->id_type = $req->theloai;
        $product->unit_price = $req->txtPrice;
        $product->image = $filename;
        $product->new = $req->rdoStatus;
        $req->file('fImages')->move('dientu/image/product', $filename);
        $product->save();
        
        return redirect('p_admin/sanpham/themsp')->with('thongbao','Thêm thành công');
    }

    public function getSuaSP($id){
        $theloai = ProductType::all();
    	$sanpham = Product::find($id);
        return view('p_admin.sanpham.suasp',compact('sanpham','theloai'));
    }

    public function postSP(Request $req, $id){

    }
       

    public function getXoaSP($id){
        Product::destroy($id);
        return back();
    }
}
