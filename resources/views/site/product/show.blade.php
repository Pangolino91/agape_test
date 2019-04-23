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
              <li class="breadcrumb-item active" aria-current="page">Product</li>
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
            <h2>Product Details</h2>
          </div>
        </div>
      </div>
      <section class="hami-features-area bg-gray section-padding-100">
        <div class="container">
          <div class="row">
              <!-- Section Heading -->
            <div class="col-12">
              <div class="section-heading text-center">
                <h2><?=$product->slug?></h2>
                <p><?=$product->description?>.</p>
              </div>
            </div>
          </div>
          @if(count($product_variants) > 0 )
          <div class="row">
          <?php $locale = session('locale'); ?>
            @if(!empty($locale) || App::isLocale('en'))
              @foreach($product_variants as $variant)
                @if($variant->locale=='en')
                  <!-- Single Team Member Area -->
                  <div class="col-12 col-lg-6">
                    <div class="single-team-member-area d-flex align-items-center mb-30">
                      <!-- Team Thumbnail -->
                      <div class="team-thumbnail">
                        <img src="/product_images/vj7fusjcmjt2odnxrch8.jpg">
                      </div>
                      <!-- Team Content -->
                      <div class="team-content">
                        <a href="/site/product_variant/{{$variant->id}}"><h5>{{$variant->slug}}</h5></a>
                        <span>{{$variant->name}}</span>
                      </div>
                    </div>
                  </div>
                @else
                  <!-- Single Team Member Area -->
                  <div class="col-12 col-lg-6">
                    <div class="single-team-member-area d-flex align-items-center mb-30">
                      <!-- Team Thumbnail -->
                      <div class="team-thumbnail">
                        <img src="/product_images/vj7fusjcmjt2odnxrch8.jpg">
                      </div>
                      <!-- Team Content -->
                      <div class="team-content">
                        <a href="/site/product_variant/{{$variant->id}}"><h5>{{$variant->slug}}</h5></a>
                        <span>{{$variant->name}}</span>
                      </div>
                    </div>
                  </div>
                @endif
              @endforeach
            @endif
          </div>
          @endif
        </div>

        <!-- Feature Pattern -->
        <div class="feature-pattern">
          <img src="img/core-img/welcome-pattern.png" alt="">
        </div>
      </section>
    </div>
  </section>
  <!-- Team Area End -->
</div>
@stop