<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function about()
  {
  	App::setLocale(session('applocale') ? session('applocale') : 'en');
    return view('site.pages.about');
  }
}
