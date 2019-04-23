<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategories;
use Illuminate\Support\Facades\DB;
use App\ProductCategoryTranslations;
use App\Product;
use Helper;

class ProductCategoriesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  #GET all product categories
  public function index(){
  	$product_categories = ProductCategories::all(); 
  }

  # GET /product_categories/1
  public function show($id)
  {
  	$data['product_category'] = ProductCategoryTranslations::where('product_category_id',$id)->first();
  	$data['products'] = Product::where('product_category_id',$id)->orderby('slug', 'ASC')->get();
  	return view('site.product_categories.show',$data);
  }

}