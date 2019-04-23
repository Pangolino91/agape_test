<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use App\ProductCategoryTranslations;
use App\ProductCategories;
class Helper{
  
  public static function retrieve_product_categories()
  {
    $sub = ProductCategoryTranslations::orderBy('name', 'ASC');
    $product_categories = DB::table(DB::raw("({$sub->toSql()}) as pct"))
                        ->groupby('pct.name')
                        ->get();
    // $product_categories = DB::table('product_category_translations')
    //                     ->join('product_categories', 'product_categories.id', '=', 'product_category_translations.product_category_id')
    //                     ->orderBy('product_category_translations.name','ASC')
    //                     //->groupBy('product_category_translations.product_category_id')
    //                     ->get();
    return $product_categories;
  }
  public static function designers($product_id)
  {
    $designers = DB::table('designers')
            ->join('designers_products', 'designers_products.designer_id', '=', 'designers.id' )
            ->where('designers_products.product_id', '=', $product_id)
            ->get();
    return $designers;
  }

  public static function product_image($product_id)
  {
    $product_variants = DB::table('product_variants')
                        ->where('product_id',$product_id)
                        ->get();
    $photos = [];
    foreach ($product_variants as $key => $variant) {
      $variants_images = DB::table('attachinary_files')
                        ->where('attachinariable_id',$variant->id)
                        ->where('attachinariable_type', 'ProductVariant')
                        ->where('scope','photos')
                        ->get();
      foreach ($variants_images as $key => $image) {
        array_push($photos,$image);
      }
    }
    
    return $photos;
    
  }
}