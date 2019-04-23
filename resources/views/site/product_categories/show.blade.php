@extends('layouts.site_layout')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="breadcrumb-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="breadcrumb-content">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product Catgories</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb Area End -->
<div class="container">
  <!-- Team Area Start -->
  <section class="hami-team-area mb-70">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>{{$product_category->name}}</h2>
            <p>{{$product_category->description}}</p>
          </div>
        </div>
      </div>
      @if(count($products) > 0 )
        <div class="row">
          @foreach($products as $product)
              <!-- Single Team Member Area -->
              <div class="col-12 col-lg-6">
                <div class="single-team-member-area d-flex align-items-center mb-30">
                    <!-- Team Thumbnail -->
                  <div class="team-thumbnail">
                    <?php $images = Helper::product_image($product->id)?>
                    <?php if (!empty($images)){ 
                      $flag=0;
                      foreach ($images as $key => $image) {
                        if($flag==0){
                          if(file_exists("http://res.cloudinary.com/agape/image/upload/".$image->public_id.'.'.$image->format)){
                            echo "string";
                            $filename = "http://res.cloudinary.com/agape/image/upload/c_thumb,h_170,w_170/".$image->public_id.'.'.$image->format;
                          }else{
                            $filename = "/product_images/vj7fusjcmjt2odnxrch8.jpg";
                          }
                        }
                      }
                    ?>
                      <img src="http://res.cloudinary.com/agape/image/upload/c_thumb,h_170,w_170/<?=$images[0]->public_id.'.'.$images[0]->format?>">
                    <?php } else{?>
                      <img src="">
                    <?php } ?>
                  </div>
                  <!-- Team Content -->
                  <div class="team-content">
                    <a href="/site/product/{{$product->id}}"><h5>{{$product->slug}}</h5></a>
                    <span>ID: #{{$product->id}}</span>
                    <span>Issue at : {{$product->issued_at}}</span>
                    <?php $designers = Helper::designers($product->id) ?> 
                    <span>Desiners: 
                      @foreach($designers as $designer)
                        {{$designer->office ? ucfirst(trans($designer->office)).', ' : $designer->firstname.' '.$designer->lastname.', '}}
                      @endforeach
                    </span>
                    <p></p>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
      @endif
    </div>
  </section>
  <!-- Team Area End -->
</div>
@stop