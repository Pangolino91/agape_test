<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductVariantsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
}
