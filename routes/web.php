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

Route::get('/', function () {
  return view('auth.login');
});
Route::get('site', 'site\HomeController@index');
Route::get('about/', 'PagesController@about');

Route::get('/site/product_category/{id}', ['uses' => 'site\ProductCategoriesController@show']);
Route::get('/site/product/{id}', ['uses' => 'site\ProductController@show']);
#Route::get('/set-language/{lang}', 'LanguagesController@set')->name('set.language');
Route::get('locale/{locale}', function ($locale){
  Session::put('locale', $locale);
  return redirect()->back();
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
