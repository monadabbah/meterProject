<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class AddCustomerController extends Controller
{

  public function addCustomer()
  {
    $user = Session::get('userData');
    if($user!=null){
      $customername = Input::get('customername');
      $id = Input::get('id');
      $address = Input::get('address');
      $customertop = DB::table('customer')->orderBy('customer_id', 'DESC')->first();
      $customerid = $customertop->customer_id + 1;
      $x = DB::table('customer')->insert(
       ['customer_id' => $customerid, 'customer_name' => $customername, 'address' => $address, 'id' => $id]
       );
       if($x==1){
         $msg = 'تمت إضافة المشترك بنجاح';
         return view('addCustomer', compact('msg'));
       }
       else {
         $msg = 'حدث خطأ، يرجى المحاولة لاحقاً';
         return view('addCustomer', compact('msg'));
       }
    }
    else {
     $errorMessage ='الرجاء تسجيل الدخول';
     return view('login', compact('errorMessage'));
    }
  }


}
