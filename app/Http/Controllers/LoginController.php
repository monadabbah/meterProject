<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class LoginController extends Controller
{

public function login()
{
  $user = Session::get('userData');
  if($user != null)
    Session::flush();
  $errorMessage ='';
  return view('login', compact('errorMessage'));
}

public function auth()
{
    $username = Input::get('username');
    $password = Input::get('password');
    $user = DB::table('users')->where('username', $username)->first();
    if($user!="")
        if($user->password == $password){
          //echo "done";
          Session::put('userData', $user);
          if ($user->admin==0) {
            $usersCount = DB::table('users')->get()->count();
            $customersCount = DB::table('customer')->get()->count();
            $metersCount = DB::table('meter')->get()->count();
            return view('index', compact('usersCount', 'customersCount', 'metersCount'));
          }

          else return view('index');
        }
        else{
          // echo "error password";
          $errorMessage = 'كلمة المرور خاطئة';
          return view('login', compact('errorMessage'));
        }
    else{
        // echo "user not found";
        $errorMessage = 'اسم المستخدم غير موجود';
        return view('login', compact('errorMessage'));
      }
}

}
