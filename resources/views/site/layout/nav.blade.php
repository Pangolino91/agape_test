<!--Header Area Start -->
<header class="header-area">
  <!-- Top Header Area Start -->
  <div class="top-header-area">
    <div class="container">
      <div class="row">

        <div class="col-6">
          <div class="top-header-content">
            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: 001-1234-88888</span></a>
            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Email: info.agape@gmail.com</span></a>
          </div>
        </div>

        <div class="col-6">
          <div class="top-header-content">
            <!-- Login -->
            @guest
              <a href="/"><i class="fa fa-lock" aria-hidden="true"></i> <span>Login / Register</span></a>
            @else
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" aria-hidden="true"></i>{{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              <!-- <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li> -->
            @endguest
            <!-- Language -->
            <li class="dropdown language-selector">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
              Languages:  
                <i class="fa fa-language"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="langdropdown">
                <li>
                  <a href="{{ url('locale/en') }}" class="dropdown-item"><img src="{{asset('img/core-img/eng.png')}}" alt=""> English</a>
                </li>
                <li>
                  <a href="{{ url('locale/it') }}" class="dropdown-item"><img src="{{asset('img/core-img/itally.jpg')}}" alt=""> Italiano</a>
                </li>
              </ul>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Header Area End -->

  <!-- Main Header Start -->
  <div class="main-header-area">
    <div class="classy-nav-container breakpoint-off">
      <div class="container">
          <!-- Classy Menu -->
        <nav class="classy-navbar justify-content-between" id="hamiNav">

            <!-- Logo -->
          <a class="nav-brand" href="site"><img src="{{asset('img/core-img/logo_trans.png')}}" alt=""></a>

          <!-- Navbar Toggler -->
          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <!-- Menu -->
          <div class="classy-menu">
            <!-- Menu Close Button -->
            <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>
            <!-- Nav Start -->
            <div class="classynav">
              <ul id="nav">
                <li><a href="#">{{ __('nav.bathroom') }}</a>
                  <ul class="dropdown">
                    <li><a href="javascript:void(0)">- {{ __('nav.product_news') }}</a></li>
                    <?php $product_categories = Helper::retrieve_product_categories() ?>
                    @if(count($product_categories) > 0) 
                      @foreach($product_categories as $product_category)
                        @if($product_category->name != "Sistema Flat XL" && $product_category->name != "Sistema Flat XL")
                          <li><a href="/site/product_category/{{$product_category->product_category_id}}">- {{$product_category->name}}</a></li>
                        @endif
                      @endforeach
                    @endif
                    <li><a href="javascript:void(0)">- Sistema FlatXL</a></li>
                    <li><a href="javascript:void(0)">- Sistema Evoluzione</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.agape_design_service') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.designer') }}</a></li>
                    <!-- <li><a href="./404.html">- 404</a></li> -->
                    <li><a href="javascript:void(0)">- {{ __('nav.references') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.download') }}</a></li>
                  </ul>
                </li>
                <li><a href="#">{{ __('nav.home') }}</a>
                  <ul class="dropdown">
                    <li><a href="javascript:void(0)">- {{ __('nav.mangiarotti_collection') }}</a></li>
                    <li><a href="/about">- {{ __('nav.about') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.designer') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.references') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.download') }}</a></li>
                  </ul>
                </li>
                <li><a href="#">{{ __('nav.contract') }}</a>
                  <ul class="dropdown">
                    <li><a href="javascript:void(0)">- {{ __('nav.services') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.references') }}</a></li>
                  </ul>
                </li>
                <li><a href="#">{{ __('nav.news') }}</a>
                  <ul class="dropdown">
                    <li><a href="javascript:void(0)">- {{ __('nav.news') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.news_letter') }}</a></li>
                  </ul>
                </li>
                <li><a href="#">{{ __('nav.company') }}</a>
                  <ul class="dropdown">
                    <li><a href="javascript:void(0)">- {{ __('nav.profile') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.history') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __ ('nav.sustainability') }}</a></li>
                    <li><a href="javascript:void(0)">- {{ __('nav.where_we_are') }}</a></li>
                  </ul>
                </li>
              </ul>

              <!-- Live Chat -->
              <!-- <div class="live-chat-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                <a href="#" class="btn hami-btn live--chat--btn"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</a>
              </div> -->
            </div>
            <!-- Nav End -->
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- Header Area End-->