<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('lytuan_login',['as'=>'getLogin','uses'=>'LoginController@getLogin']);
Route::get('logout',['as'=>'getLogout','uses'=>'LogoutController@getLogout']);
Route::get('trangchu',['as'=>'getLogout','uses'=>'LogoutController@getLogout']);
Route::post('lytuan_login',['as'=>'postLogin','uses'=>'LoginController@postLogin']);
Route::get('danhsach',['as'=>'getList','uses'=>'SinhVienController@getList']);
Route::post('danhsach',['as'=>'postSinhVien','uses'=>'SinhVienController@postSinhVien']);
Route::get('delete/{id}',['as'=>'delSinhVien','uses'=>'SinhVienController@delSinhVien']);
Route::get('edit/{id}',['as'=>'editSinhVien','uses'=>'SinhVienController@editSinhVien']);
Route::post('edit/{id}',['as'=>'postEditSinhVien','uses'=>'SinhVienController@postEditSinhVien']);
Route::get('url/get-list-student/json', function () {
    return App\SinhVien::paginate()->toJson();
});
