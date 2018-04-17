<!DOCTYPE html>
<html>
<head>
<title>Galuh Nunata</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/font.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/li-scroller.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.fancybox.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="{{ route('index') }}" class="logo"><img src=" {{asset('images/logo.png') }}" height="111"; width="211"; alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="{{ asset('images/addbanner_728x90_V1.jpg') }}" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>

  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="{{ route('index') }}"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="{{ route('berita.berita-nasional') }}">Berita Nasional</a></li>
          <li><a href="{{ route('berita.sosial-dan-budaya') }}">Sosial Budaya</a></li>
          <li><a href="{{ route('berita.tokoh-dan-aktivis') }}">Tokoh dan Aktivis</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Route::has('login'))
                    @auth
                        <li class="dropdown"><a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Menu Administrator</a></li>
                            <li><a href="#">Update Profile</a></li>
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                          </ul>
                        </li>
                    @else
                      
                        <li><a href="{{ route('login') }}" id="myBtn">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                      
                    @endauth
            @endif
        </ul>
      </div>
    </nav>
  </section>

  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Four News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Seven News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
            <li><a href="#"><img src="images/news_thumbnail2.jpg" alt="">My Nine News Item</a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  @yield('konten')

  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Lokasi</h2>
            PETA
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Berita Nasional</a></li>
              <li><a href="#">Sosial Budaya</a></li>
              <li><a href="#">Tokoh dan Aktivis</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Administrator</p>
            <address>
            Email: Administrator@gmail.com<br> Telp: +628123456789
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2045 <a href="{{ route('index') }}">NewsFeed</a></p>
      <p class="developer">Developed By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/wow.min.js') }}"></script> 
<script src="{{ asset('js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/slick.min.js') }}"></script> 
<script src="{{ asset('js/jquery.li-scroller.1.0.js') }}"></script> 
<script src="{{ asset('js/jquery.newsTicker.min.js') }}"></script> 
<script src="{{ asset('js/jquery.fancybox.pack.js') }}"></script> 
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>