<?php

namespace App\Http\Controllers;

use App;
use App\ProductCategoryTranslations;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function about()
  {
  	$data['product_categories'] =  ProductCategoryTranslations::orderBy('name', 'desc')->get();
  	App::setLocale(session('applocale') ? session('applocale') : 'en');
    return view('site.pages.about',$data);
  }
}
