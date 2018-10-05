<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class AddMeterController extends Controller
{

  public function addMeter()
  {
    $user = Session::get('userData');
    if($user!=null){
      $metertype = Input::get('meterType');
      $investmentstatus = Input::get('investmentStatus');
      $voltage = Input::get('voltage');
      $paidtype = Input::get('paidType');
      $postid = Input::get('postId');
      $serialNumber = Input::get('serialNumber');
      $customerid = Input::get('customerName');

      $metertop = DB::table('meter')->orderBy('meter_key', 'DESC')->first();
      $meterkey = $metertop->meter_key + 1;

      $x = DB::table('meter')->insert(
       ['meter_key' => $meterkey, 'meter_type' => $metertype, 'investment_status' => $investmentstatus, 'voltage' => $voltage, 'paid_type' => $paidtype, 'post_id' => $postid, 'customer_id' => $customerid, 'serial_number' => $serialNumber]
       );

       if($x==1){
         $msg = 'تمت إضافة العداد بنجاح';
         $customers = DB::select('select customer_id, customer_name from customer');
         $posts = DB::select('select post_id from post');
         return view('addMeter', compact('msg', 'customers', 'posts'));
       }
       else {
         $msg = 'حدث خطأ، يرجى المحاولة لاحقاً';
         $customers = DB::select('select customer_id, customer_name from customer');
         $posts = DB::select('select post_id from post');
         return view('addMeter', compact('msg', 'customers', 'posts'));
       }
    }
    else {
     $errorMessage ='الرجاء تسجيل الدخول';
     return view('login', compact('errorMessage'));
    }
  }

}
