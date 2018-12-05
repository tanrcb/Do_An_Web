<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class PageController extends Controller
{
    public function getIndex(){
        $new_product = Product::where('new',1)->get();
        return view('page.trangchu',compact('new_product'));
    }
    public function getLoaiSP($type){
        $sp_theoloai = Product::where('id_type',$type)->get();
        return view('page.loai_sanpham',compact('sp_theoloai'));
    }
    public function getChitietSP(Request $req){
        $sanpham = Product::where('id',$req->id)->first();
        return view('page.chitiet_sanpham',compact('sanpham','sp_loai'));
    }

}
