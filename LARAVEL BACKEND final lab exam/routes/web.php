<?php

use App\Http\Controllers\MNGHomeController;
use Illuminate\Support\Facades\Route; 

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
Route::get('/userlist','ApiUser@index');

Route::get('/discount/{id}', 'MNGHomeController@discount')->name('MNGdiscount'); //MANAGER ROUTE
//Route::get('/discount/{id}','MNGHomeController@discount')->name('MNGdiscount'); //MANAGER ROUTE
Route::get('/contentpublish/{id}','MNGContentindex@publish')->name('MNGpublish'); //MANAGER ROUTE
Route::get('/contentdecline/{id}','MNGContentindex@decline')->name('MNGdecline'); //MANAGER ROUTE

//Route::get('/contentpublish','MNGContentindex@publish'); //MANAGER ROUTE

Route::get('/payment','MNGpaymentController@paymentview'); //MANAGER ROUTE

Route::get('/contentmanage','MNGHomeController@contentmanageview'); //MANAGER ROUTE
Route::get('/orderapprove','MNGHomeController@orderapproveview');//MANAGER ROUTE
Route::get('/creatorprofile','MNGHomeController@creatorprofileview');//MANAGER ROUTE
Route::get('/userprofile','MNGHomeController@userprofileview');//MANAGER ROUTE
Route::get('/paymentmanage','MNGHomeController@paymentmanageview');//MANAGER ROUTE
Route::get('/allcontent','MNGHomeController@allcontentview');//MANAGER ROUTE
Route::get('/editprofile','MNGHomeController@editprofileview');//MANAGER ROUTE
Route::post('/editprofile','MNGHomeController@update');//MANAGER ROUTE

Route::get('/login', 'userlogincontroller@index')->name('user.login');
Route::post('/login', 'userlogincontroller@verify');
Route::group(['middleware'=>['sess']], function(){
		Route::get('/user/dashboard', 'userdashboardcontroller@index')->name('user.dashboard');
		Route::get('/user/content/details/{id}', 'userdashboardcontroller@details')->name('user.dashboarddetails');
		//Route::get('/user/content/download/{id}', 'userdashboarddownload@download');
		Route::get('/logout', 'userlogoutcontroller@index')->name('user.logout');
		Route::get('/user/order', 'userordercontroller@index')->name('user.order');
		Route::post('/user/order', 'userordercontroller@add')->name('user.orderadd');
		Route::get('/user/order/details', 'userordercontroller@details')->name('user.orderdetails');
		Route::get('/user/order/MNGdetails', 'userordercontroller@MNGdetails')->name('user.MNGorderdetails');//MANAGER ROUTE

		Route::get('/user/order/edit/{id}', 'userordercontroller@edit')->name('user.orderedit');
		Route::post('/user/order/edit/{id}', 'userordercontroller@update')->name('user.orderupdate');
		Route::get('/user/order/delete/{id}', 'userordercontroller@del')->name('user.orderdelete');
		Route::get('/user/order/approve/{id}', 'userordercontroller@orderapprove')->name('user.orderapprove'); //MANAGER ROUTE
		Route::get('/user/order/destroy/{id}', 'userordercontroller@des')->name('user.orderdestroy');
		Route::get('/user/content/invoice/{id}', 'userdashboardcontroller@invoice')->name('user.dashboardinvoice');
		Route::get('/user/content/print/{id}', 'userdashboardcontroller@print')->name('user.dashboardprint');	
});
