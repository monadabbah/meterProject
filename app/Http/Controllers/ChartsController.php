<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class ChartsController extends Controller
{
  public function charts(){
    $user = Session::get('userData');
    if ($user!=null){
      $collapse = '';
      $chartLabels = '';
      $chartData = '';
      return view ('charts', compact('chartLabels', 'chartData', 'collapse'));
    }
    else {
      $errorMessage ='الرجاء تسجيل الدخول';
      return view('login', compact('errorMessage'));
    }
  }

  public function getcharts(){

    $meterKey = request('meterKey');
    $postId = request('postId');
    $fromDate = Input::get('fromDate');
    $toDate = Input::get('toDate');

    $fromDate = date('Ymd', strtotime($fromDate));
    $toDate = date('Ymd', strtotime($toDate));

    $fromYear = date('Y', strtotime($fromDate));
    $toYear = date('Y', strtotime($toDate));

    $fromMonth = date('Ym', strtotime($fromDate));
    $toMonth = date('Ym', strtotime($toDate));

    $fromDay = date('d', strtotime($fromDate));
    $toDay = date('d', strtotime($toDate));

    if($meterKey!=null){
      $collapse = 'collapseOne';
      if($toYear-$fromYear>0)
      {
          $year = 'YEAR';
          $chartDetail = DB::select('select dim_key, sum_qty
          from dim_time_view, meter_cube_view
          where dim_time_view.dim_key=meter_cube_view.dim_time
          and level_name='.$year.
          ' and dim_meter='.$meterKey.
          ' and dim_key between '.$fromYear.' and '.$toYear);
          $length = count($chartDetail);
          for ($i = 0; $i < $length; $i++) {
            $chartLabels[] = (string) $chartDetail[$i]->dim_key;
            $chartData[] = $chartDetail[$i]->sum_qty;
          }
      }
      else if($toMonth-$fromMonth>6){
        $month = 'MONTH';
        $chartDetail = DB::select('select dim_key, sum_qty
        from dim_time_view, meter_cube_view
        where dim_time_view.dim_key=meter_cube_view.dim_time
        and level_name='.$month.
        ' and dim_meter='.$meterKey.
        ' and dim_key between '.$fromMonth.' and '.$toMonth);
        $length = count($chartDetail);
        for ($i = 0; $i < $length; $i++) {
          $chartLabels[] = (string) $chartDetail[$i]->dim_key;
          $chartData[] = $chartDetail[$i]->sum_qty;
        }
      }
      else {
        $chartDetail = DB::select('select day_id as day_id,sum(sum_qty) as sum_qty
        from time, fact_meter
        where time.time_Id=fact_meter.time_key
        and meter_key='.$meterKey.
        'and day_id between '.$fromDate.' AND '.$toDate.
        'group by day_id
         order by 1');
        //dd($chartDetail[0]->day_id);
        $length = count($chartDetail);
        for ($i = 0; $i < $length; $i++) {
          $chartLabels[] = (string) $chartDetail[$i]->day_id;
          $chartData[] = $chartDetail[$i]->sum_qty;
        }
        // dd($chartLabels);
      }

      return view ('charts', compact('chartLabels', 'chartData', 'collapse'));
    }

    else if ($postId!=null){
      $collapse = 'collapseTwo';
      $chartLabels = '';
      $chartData = '';
      // $meters = DB::table('meter')->where('post_id', '=', $postId)->get();
      $meters = DB::select('select meter_key from meter where post_id='.$postId);
      $length = count($meters);

      for ($i = 0; $i < $length; $i++) {
        $meterKey = $meters[$i];

        // $chartDetail = DB::select('select day_id as day_id,sum(sum_qty) as sum_qty
        //   from time, fact_meter
        //   where time.time_Id=fact_meter.time_key
        //   and meter_key='.$meterKey.
        //   'and day_id between '.$fromDate.' AND '.$toDate.
        //   'group by day_id
        //   order by 1');

          // $chartLabels[] = (string) $chartDetail[$i]->day_id;
          // $chartData[] = $chartDetail[$i]->sum_qty;
      }
// dd($chartLabels);
      return view ('charts', compact('chartLabels', 'chartData', 'collapse'));
    }

  }

}
