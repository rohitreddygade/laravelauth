<?php
Route::get('/', function () {
    return view('welcome');
});
//Users Routes
Route::group(['prefix'=>'user'],function()
{
  Route::get('/sinup', function(){return view('account.sinup');} );
  Route::post('/sinup' ,['uses'=>'AccountController@postsinup', 'as'=>'sinup']);

  Route::get('/sinin', function(){return view('account.sinin');} );
  Route::post('/sinin' ,['uses'=>'AccountController@postsinin', 'as'=>'sinin']);
  Route::get('/activate/{code}','AccountController@activate');

}
);
