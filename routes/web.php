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
// Route::get('test',function(){
//     $loaitour = LoaiTour::find(1);;
//     foreach ($loaitour->tour as $tour) {
//         echo $tour->ten."<br>";
//     }
// });
// Route::get('test',function(){
//     return view('admin.loaitour.list');
// });
use App\LoaiTour;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'loaitour'],function(){
        //EX: admin/loaitour/list
        Route::get('list','LoaiTourController@getList');

        Route::get('add','LoaiTourController@getAdd');
        Route::post('add','LoaiTourController@postAdd');

        Route::get('edit','LoaiTourController@getEdit');
    });
    Route::group(['prefix'=>'tour'],function(){
        Route::get('list','TourController@getList');

        Route::get('add','TourController@getAdd');

        Route::get('edit','TourController@getEdit');
    });
    Route::group(['prefix'=>'ct_tour'],function(){
        Route::get('list','CT_TourController@getList');

        Route::get('add','CT_TourController@getAdd');

        Route::get('edit','CT_TourController@getEdit');
    });
    Route::group(['prefix'=>'khachhang'],function(){
        Route::get('list','KhachHangController@getList');

        Route::get('add','KhachHangController@getAdd');

        Route::get('edit','KhachHangController@getEdit');
    });
    Route::group(['prefix'=>'phuongtien'],function(){
        Route::get('list','PhuongTienController@getList');

        Route::get('add','PhuongTienController@getAdd');

        Route::get('edit','PhuongTienController@getEdit');
    });
    Route::group(['prefix'=>'khuyenmai'],function(){
        Route::get('list','KhuyenMaiController@getList');

        Route::get('add','KhuyenMaiController@getAdd');

        Route::get('edit','KhuyenMaiController@getEdit');
    });
});