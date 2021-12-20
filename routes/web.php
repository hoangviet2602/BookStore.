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

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
//user
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
Route::get('/danh-muc-san-pham/{categoryid}', 'CategoryProduct@show_category_home');
Route::post('/dangky', 'HomeController@postDangKy');
Route::post('/dangnhap', 'HomeController@postDangNhap');
Route::get('/dangxuat', 'HomeController@getDangXuat');


//admin


// BEGIN ADMIN
// admin dashboard
Route::get('/admin', 'AdminController@index');
Route::get('/show_dashboard', 'AdminController@showDashBoard');
Route::post('/admin_dashboard','AdminController@dashboard'); 
Route::get('/logout', 'AdminController@logout');

// admin category
Route::get('/add_category', 'CategoryProduct@show_form_add_category');
Route::get('/all_category', 'CategoryProduct@show_all_category');
Route::post('/save_category', 'CategoryProduct@add_category');
Route::get('/delete_category/{categoryid}', 'CategoryProduct@delete_category');
Route::get('/update_category/{categoryid}', 'CategoryProduct@show_form_edit_category');
Route::post('/save_editcategory', 'CategoryProduct@update_category');

// admin nxb
Route::get('/all_nxb', 'NXBController@show_all_NXB');
Route::get('/add_nxb', 'NXBController@show_form_add_NXB');
Route::get('/delete_nxb/{nxbid}', 'NXBController@delete_nxb');
Route::post('/save_nxb', 'NXBController@add_nxb');
Route::get('/update_nxb/{nxbid}', 'NXBController@show_form_edit_NXB');
Route::post('/save_editnxb', 'NXBController@update_NXB');
// END ADMIN
