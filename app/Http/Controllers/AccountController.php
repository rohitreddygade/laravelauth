<?php

namespace mybookstack\Http\Controllers;

use Illuminate\Http\Request;
use mybookstack\Http\Requests;
use mybookstack\Http\Controllers\Controller;

use Input;
use Hash;
Use DB;
use Mail;
use Auth;
use Redirect;
use mybookstack\User;
use mybookstack\Http\Requests\SinUp;
use mybookstack\Http\Requests\SinIn;

class AccountController extends Controller
{

    public function postsinup(SinUp $request)
    {
       $user = new User;
       $code = str_random(40);
       $mail = Input::get('email_id');
       $name = Input::get('username');
       $user->username = $name;
       $user->email = $mail;
       $user->password =  Hash::make(Input::get('password'));
       $user->code  = $code;
       $user->save();
       if ($user->save())
       {
      //    Mail::send('emails.active', ['mail' => $mail,'name' => $name,'link' => 'http://localhost:8000/user/activate/','code' =>$code ,'email' => $mail  ], function($message) use ($user)
      //  {
      //      $message->to( $user->email,  $user->username)->from("test@mybookrack.com")->subject('mybookstack.com Activation Code');
      //  });
         return 'This site is undertesting processes';
       }
       return 'Something went wrong please try again later.';
    }
    public function activate($code)
    {
       $emailcode = explode('_&_', $code);
       $user  = new User;

       $user = DB::table('users')->where('email', '=', $emailcode[0])->first();
       if($emailcode[1] == $user->code)
       {
         DB::table('users')->where('email', '=', $emailcode[0])->update(['code' => '','active' => '1']);
         return redirect('home');
       }
       else {
        return abort(404);
       }
    }
    public function postsinin(Sinin $request)
    {
      $remember = (Input::has('remember'))?true:false;

         $email = Input::get('email_id');
         $password = Input::get('password');
       if (Auth::attempt(['email' => $email, 'password' => $password,'active'=>1],$remember)) {

         return redirect('/home');;
       }
       return "Please Activate your account  a mail is sended to you mail ";
    }
}
