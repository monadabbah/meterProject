<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class IndexController extends Controller
{

  public function getValues()
  {
      $user = Session::get('userData');
      if($user!=null){
        $usersCount = DB::table('users')->get()->count();
        $customersCount = DB::table('customer')->get()->count();
        $metersCount = DB::table('meter')->get()->count();
        return view('index', compact('usersCount', 'customersCount', 'metersCount'));
      }
      else {
        $errorMessage ='الرجاء تسجيل الدخول';
        return view('login', compact('errorMessage'));
      }

  }

}
