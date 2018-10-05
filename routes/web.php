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
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    $errorMessage ='';
    return view('login', compact('errorMessage'));
});
// Route::get('login', function () {
//     return view('login');
// });
Route::get('login', 'LoginController@login');
Route::get('index', 'IndexController@getValues');
Route::post('auth', array('as' => 'auth', 'uses' => 'LoginController@auth'));
Route::get('login', array('as' => 'login', 'uses' => 'LoginController@login'));

Route::get('invoiceFirst','InvoiceFirstController@invoiceFirst');
Route::post('readdata', array('as' => 'meterRead', 'uses' => 'MeterReadController@meterRead'));
Route::get('readdata', function () {
  $user = Session::get('userData');
  if ($user!=null){
    $msg = '';
    return view ('readdata', compact('msg'));
  }
  else {
    $errorMessage ='الرجاء تسجيل الدخول';
    return view('login', compact('errorMessage'));
  }
});
Route::post('invoiceFirst', array('as' => 'invoiceFirst', 'uses' => 'InvoiceFirstController@invoiceFirstUser'));
Route::get('invoice', array('as' => 'invoice', 'uses' => 'InvoiceController@invoice'));
Route::get('invoice/{customer_id}/{meter_key}/{bill_id}', 'InvoiceController@invoice');
Route::get('addMeter', function () {
  $customers = DB::select('select customer_id, customer_name from customer');
  $posts = DB::select('select post_id from post');
  $msg = '';
  return view('addMeter', compact('msg', 'customers', 'posts'));
});
Route::get('addCustomer', function () {
  $msg = '';
  return view('addCustomer', compact('msg'));
});
Route::get('addUser', function () {
  $msg = '';
  return view('addUser', compact('msg'));
});
Route::post('addUser', array('as' => 'addUser', 'uses' => 'AddUserController@addUser'));
Route::post('addCustomer', array('as' => 'addCustomer', 'uses' => 'AddCustomerController@addCustomer'));
Route::post('addMeter', array('as' => 'addMeter', 'uses' => 'AddMeterController@addMeter'));
Route::get('charts', function () {

  $user = Session::get('userData');
  if ($user!=null){
    $msg = '';
    return view ('charts');
  }
  else {
    $errorMessage ='الرجاء تسجيل الدخول';
    return view('login', compact('errorMessage'));
  }
});
Route::get('charts', array('as' => 'charts', 'uses' => 'ChartsController@charts'));
Route::get('invoiceFirst', array('as' => 'invoiceFirst', 'uses' => 'InvoiceFirstController@invoiceFirst'));
Route::get('readdata', array('as' => 'readdata', 'uses' => 'MeterReadController@getreaddata'));
Route::get('index', array('as' => 'index', 'uses' => 'IndexController@getValues'));
Route::post('charts', array('as' => 'charts', 'uses' => 'ChartsController@getcharts'));
