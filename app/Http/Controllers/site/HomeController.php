<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategories;
use App\ProductCategoryTranslations;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    return view('site.index');
  }
}
