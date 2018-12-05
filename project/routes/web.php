<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[   
'as'=>'trang-chu',   
'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[ 
'as'=>'loaisanpham',  
'uses'=>'PageController@getLoaiSP'
]);

Route::get('chi-tiet-san-pham/{id}',[   
'as'=>'chitietsanpham', 
'uses'=>'PageController@getChitietSP'
]);
//Loai san pham
Route::group(['prefix'=>'p_admin'], function(){

	Route::group(['prefix'=>'loaisp'],function(){
		Route::get('listloai',[
			'as'=>'list-loai',
			'uses'=>'LoaispController@getListLoai'
		]);
		//Them
		Route::get('themloai','LoaispController@getThemLoai');
		Route::post('themloai','LoaispController@postThemLoai');
		//Sua
		Route::get('sualoai/{id}','LoaispController@getSuaLoai');
		Route::post('sualoai/{id}','LoaispController@postSuaLoai');
		//Xoa
		Route::get('xoaloai/{id}','LoaispController@getXoaLoai');
	});
//San pham
	//Danh sach
	Route::group(['prefix'=>'sanpham'],function(){
		Route::get('listsp','SanPhamController@getSanPham');
		//Them
		Route::get('themsp','SanPhamController@getThemSP');
		Route::post('themsp','SanPhamController@postThemSP');
		//Sua
		Route::get('suasp/{id}','SanPhamController@getSuaSP');
		Route::post('suasp/{id}','SanPhamController@postSuaSP');
		//Xoa
		Route::get('xoasp/{id}','SanPhamController@getXoaSP');
	});


});