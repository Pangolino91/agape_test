<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductVariants;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index(){

  }

  public function show($id){

    $data['product'] = Product::where('id',$id)->first();
    $data['product_variants'] = DB::table('product_variants')
            ->join('product_variant_translations', 'product_variant_translations.product_variant_id', '=', 'product_variants.id' )
            ->where('product_id', $id)
            ->orderby('product_variants.id','DESC')
            ->get();
    $data['photos'] = [];

    foreach($data['product_variants'] as $variant){
      $variants_images = DB::table('attachinary_files')
                        ->where('attachinariable_id',$variant->id)
                        ->where('attachinariable_type', 'ProductVariant')
                        ->where('scope','photos')
                        ->get();
      foreach($variants_images as $image){
        array_push($data['photos'],$image);
      }
    }

    return view('site.product.show',$data);
  }
}
