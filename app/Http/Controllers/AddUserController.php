<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use DB;
use Session;

class AddUserController extends Controller
{

  public function addUser()
  {
    $user = Session::get('userData');
    if($user!=null){
      $username = Input::get('username');
      $password = Input::get('password');
      $usertype = Input::get('usertype');
      $usertop = DB::table('users')->orderBy('userid', 'DESC')->first();
      $userid = $usertop->userid + 1;
      $x = DB::table('users')->insert(
       ['userid' => $userid, 'username' => $username, 'password' => $password, 'admin' => $usertype]
       );
       if($x==1){
         $msg = 'تمت إضافة المستخدم بنجاح';
         return view('addUser', compact('msg'));
       }
       else {
         $msg = 'حدث خطأ، يرجى المحاولة لاحقاً';
         return view('addUser', compact('msg'));
       }
    }
    else {
     $errorMessage ='الرجاء تسجيل الدخول';
     return view('login', compact('errorMessage'));
    }
  }

}
