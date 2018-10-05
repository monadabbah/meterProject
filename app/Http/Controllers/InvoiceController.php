<?php

namespace App\Http\Controllers;

use DB;

class InvoiceController extends Controller
{

public function invoice()
{
    $customerID = request('customer_id');
    $meterKey = request('meter_key');
    $billID = request('bill_id');
    $customerMeterBillDetail = DB::table('bill')
    ->where('bill.bill_id', $billID)
    ->join('meter', 'bill.meter_Key', '=', 'meter.meter_key')
    ->join('customer', 'customer.customer_id', '=', 'meter.customer_id')
    ->select('meter.*', 'customer.*', 'bill.*')
    ->get()->first();

    // $factmeterDetail = DB::select('select day_qty, peak_qty, night_qty, sum_qty, imp_day_qty, imp_peak_qty, imp_night_qty, imp_sum_qty from dim_time_view, meter_cube_view
    // where dim_time_view.dim_key = meter_cube_view.time_key
    // and level_name = "PERIOD"
    // and dim_meter = 10
    // and dim_key = 201762');
    $factmeterDetail = DB::table('fact_meter')->first();
// dd($customerDetail);
    return view('invoice', compact('customerMeterBillDetail', 'factmeterDetail'));
}

}
