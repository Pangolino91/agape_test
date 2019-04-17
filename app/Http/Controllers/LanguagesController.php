<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

class LanguagesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function set($lang)
  {
    session(['applocale' => $lang]);
    return back();
  }
}
