<!DOCTYPE html>
<html>
 <head>
   @include('site.layout.header')
 </head>
 <body>
  @include('site.layout.nav')
  <section class="hami-call-to-action bg-gray section-padding-100-0">
    <div class="container">
      <div class="row align-items-center">
        @yield('content')
      </div>
    </div>
  </section>
  <section class="hami-support-area bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="support-text">
            <h2>Need help? Call our award-winning support team 24/7: +65 1234-6868</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Support Pattern -->
    <div class="support-pattern" style="background-image: url(img/core-img/support-pattern.png);"></div>
  </section>
  <section class="hami-cta-area">
    <div class="container">
      <div class="cta-text">
        
      </div>
    </div>
  </section>
  @include('site.layout.footer')
  @include('site.layout.footer_script')
 </body>
</html>