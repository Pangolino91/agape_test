<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}

Route::get('/', function () {
  return view('auth.login');
});
Route::get('site', 'site\HomeController@index');
Route::get('about/', 'PagesController@about');
#Route::get('/set-language/{lang}', 'LanguagesController@set')->name('set.language');
Route::get('locale/{locale}', function ($locale){
  Session::put('locale', $locale);
  return redirect()->back();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
