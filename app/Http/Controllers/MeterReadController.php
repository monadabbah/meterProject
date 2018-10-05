<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class MeterReadController extends Controller
{

  public function getreaddata(){
    $user = Session::get('userData');
    if ($user!=null){
      $msg = '';
      return view ('readdata', compact('msg'));
    }
    else {
      $errorMessage ='الرجاء تسجيل الدخول';
      return view('login', compact('errorMessage'));
    }
  }

  public function meterRead()
  {
    $timeRead = Input::get('timeRead');
    $dateRead = Input::get('dateRead');

    $dateRead = date('Ymd', strtotime($dateRead));
    $timeRead = explode(':',$timeRead);
    if ($timeRead[1] <= 19)
      $timeRead[1] = 00;
    else if ($timeRead[1] <= 39)
      $timeRead[1] = 20;
    else
      $timeRead[1] = 40;
    $timeKey = $dateRead . $timeRead[0] . $timeRead[1];
    // dd($timeRead[1]);

    $meterKey = Input::get('meterKey');

    $DayQty = Input::get('DayQty');
    $NightQty = Input::get('NightQty');
    if ($DayQty >= $NightQty)
      $PeakQty = $DayQty;
    else
      $PeakQty = $NightQty;
    $sumQty = $DayQty + $NightQty;

    $ImpDayQty = Input::get('ImpDayQty');
    $ImpNightQty = Input::get('ImpNightQty');
    if ($ImpDayQty >= $ImpNightQty)
      $ImpPeakQty = $ImpDayQty;
    else
      $ImpPeakQty = $ImpNightQty;
    $impSumQty = $ImpDayQty + $ImpNightQty;

    $x=DB::table('Fact_meter')->insert(['time_key' => $timeKey, 'meter_key' => $meterKey,
     'day_qty' => $DayQty, 'Peak_Qty' => $PeakQty, 'Night_Qty' => $NightQty,
     'sum_qty' => $sumQty,
     'Imp_Day_Qty' => $ImpDayQty, 'Imp_Peak_Qty' => $ImpPeakQty, 'Imp_Night_Qty' => $ImpNightQty,
     'imp_sum_qty' => $impSumQty]);

    if($x == 1){
      $msg = 'تمت قراءة قيم العداد بنجاح';
      return view('readdata', compact('msg'));
    }
    else{
      $msg = 'حدث خطأ أثناء قراءة قيم العداد، الرجاء المحاولة لاحقاً';
      return view('readdata', compact('msg'));
    }
  }

}
