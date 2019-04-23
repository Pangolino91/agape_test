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