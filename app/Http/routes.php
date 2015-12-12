<?php

//Users Routes
Route::group(['middleware'=>'guest'],function()
{
  Route::get('/', function () {
      return view('welcome');
  });
  Route::group(['prefix'=>'user'],function()
  {
    Route::get('/sinup', function(){return view('account.sinup');} );
    Route::get('/login', function(){return view('account.sinin');} );
    Route::get('/activate/{code}','AccountController@activate');
    Route::post('/sinup' ,['uses'=>'AccountController@postsinup', 'as'=>'sinup']);
    Route::post('/login' ,['uses'=>'AccountController@postsinin', 'as'=>'sinin']);
  });
});
//Login Routes.
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function (){
      return view('users.index') ;
    });
    Route::get('/user/logout',function(){
      Auth::logout();
      return redirect('user/login');
    });
  }
  );
