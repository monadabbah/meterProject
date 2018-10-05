<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class InvoiceFirstController extends Controller
{
  // public $meterUser;
  // public $customerID;

  public function invoiceFirst()
  {
     $user = Session::get('userData');
     if ($user!=null){
      $meterKeyinput ='';
      $customerIDinput = '';
      $customerMeterBill = '';
      $collapse = '';
      return view('invoiceFirst', compact('customerMeterBill', 'collapse', 'meterKeyinput', 'customerIDinput'));
      // return view('invoiceFirst', compact('customerMeterBill', 'collapse'));
     }
     else {
      $errorMessage ='الرجاء تسجيل الدخول';
      return view('login', compact('errorMessage'));
     }
  }

  public function invoiceFirstUser()
  {

     $customerIDinput = request('customerID');
     $meterKeyinput = request('meterKey');

     if($customerIDinput!=null){
        $collapse = 'collapseOne';
        $customerMeterBill = DB::table('meter')
        ->where('meter.customer_id', $customerIDinput)
        ->join('customer', 'meter.customer_id', '=', 'customer.customer_id')
        ->join('bill', 'meter.meter_key', '=', 'bill.meter_key')
        ->select('meter.meter_key as meter_key', 'customer.customer_id as customer_id', 'customer.customer_name as customer_name', 'bill.bill_id as bill_id', 'bill.version_number as version_number', 'bill.ispaid as ispaid')
        ->orderBy('bill.version_number', 'desc')
        ->get();

     // $meterUser = DB::table('customer')
     //  ->join('meter', function ($join) {
     //      $join->on('customer.customer_id', '=', 'meter.customer_id')
     //         ->where('customer.customer_id', '=', request('customerID'));
     //  })
     //  ->get();

      return view('invoiceFirst', compact('customerMeterBill', 'collapse'));
   }
   else if ($meterKeyinput!=null) {
     $collapse = 'collapseTwo';
     $customerMeterBill = DB::table('meter')
     ->where('meter.meter_key', $meterKeyinput)
     ->join('customer', 'meter.customer_id', '=', 'customer.customer_id')
     ->join('bill', 'meter.meter_key', '=', 'bill.meter_key')
     ->select('meter.meter_key as meter_key', 'customer.customer_id as customer_id', 'customer.customer_name as customer_name', 'bill.bill_id as bill_id', 'bill.version_number as version_number', 'bill.ispaid as ispaid')
     ->get();

     // $meterUser = DB::table('meter')
     //  ->join('customer', function ($join) {
     //      $join->on('meter.customer_id', '=', 'customer.customer_id')
     //         ->where('meter.meter_key', '=', request('meterKey'));
     //  })
     //  ->get();

     return view('invoiceFirst', compact('customerMeterBill', 'collapse'));
   }

  }

}
