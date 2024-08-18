<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">

<title>WINMART</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{asset('assets\css\bootstrap.min.css')}}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{asset('assets\css\main.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\blue.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\animate.min.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\rateit.css')}}">
<link rel="stylesheet" href="{{asset('assets\css\bootstrap-select.min.css')}}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{asset('assets\css\font-awesome.css')}}">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="https://shopee.vn/thuysinhmoc"><i class=""></i>Shopeee</a></li>
            <li><a href="https://www.facebook.com/thanh.phon.940"><i class=""></i>Facebook</a></li>
            <li><a href="https://zaloapp.com/qr/p/mhrh7jnr229h"><i class=""></i>Đối Tác Winmart</a></li>
            
            
            {{-- <li><a href="{{url('like')}}"><i class="icon fa fa-heart"></i>Sản Phẩm Yêu Thích</a></li> --}}
            <li><a href="{{url('cartlist')}}"><i class="icon fa fa-shopping-cart"></i>Giỏ Hàng</a></li>
            <li><a href="#"><i class="icon fa fa-check"></i>Thanh Toán</a></li>
            @if(Auth::check())
            <li><a href="{{url('customer')}}"><i class="icon fa fa-user"></i><b>{{Auth::User()->name}}</b></a></li>
            
            
            @endif
            @if(Auth::check())
            <li><a href="{{url('logout')}}"><i class="icon fa fa-lock"></i>Đăng Xuất</a></li>
            @else
            <li><a href="{{url('sign')}}"><i class="icon fa fa-lock"></i>Đăng Nhập</a></li>
            @endif
            <li> <a href="{{url('contact')}}">Liên Hệ Tư Vấn</a> </li>
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        {{-- <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>
          </ul>
          <!-- /.list-unstyled --> 
        </div> --}}
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{url('home')}}"> <img src="{{asset('assets\images')}}" alt="logo" height="100" width="100" style="position:absolute; left:110px; top:-42px;"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> 
        </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form action="{{url('search')}}" method="get">
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Tìm Kiếm Nhanh <b class="caret"></b></a>
                    
                  </li>
                </ul>
                <input class="search-field" name="key" placeholder="Nhập mặt hàng bạn muốn tìm...">
                {{-- <a class="search-button" href="#"></a>  --}}
                <button class="search-button" type="submit"></button>
              </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div class="dropdown dropdown-cart"> <a href="{{url('cart')}}" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count">@if(Session::has('cart')){{Session('cart')->totalQty}}@else 0 @endif</span></div>
              <div class="total-price-basket"> <span class="lbl">Giỏ Hàng</span>  </div>
            </div>
            
            </a>
            @if(Session::has('cart'))
            <ul class="dropdown-menu">
              <li>
                
                @foreach($product_cart as $product) 
                <div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.html"><img src="{{ asset('assets/images/products/' . $product['item']['Anh']) }}" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="index.php?page-detail">{{$product['item']['TenSanPham']}}</a></h3>
                      <span class="price">{{$product['qty']}}x<span>{{$product['item']['GiaKhuyenMai']}}</span></span>
                      {{-- <div class="price">{{$product['item']['GiaKhuyenMai'])}}</div>
                      <div class="price">{{$product['item']['GiaKhuyenMai'])}}</div> --}}
                    </div>
                    <div class="col-xs-1 action"> <a href="{{url('delcart', $product['item']['MaSanPham'])}}"><i class="fa fa-trash"></i></a> </div>
                  </div>
                </div>
                @endforeach
                
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Tổng Tiền :</span><span class='price'>{{Session('cart')->totalPrice}}</span> </div>
                  <div class="clearfix"></div>
                  <a href="{{url('cartlist')}}" class="btn btn-upper btn-primary btn-block m-t-20">Mua Hàng</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            @endif
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown yamm-fw"> <a href="{{url('home')}}" {{-- data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" --}}>Trang Chủ</a> </li>
                @foreach($loaisanpham as $p)
                <li class="active dropdown yamm-fw"> <a href="{{ url('category', $p->MaLoaiSanPham) }}" {{-- data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown" --}}>{{$p->TenLoaiSanPham}}</a>
                 
                </li>
                @endforeach
                  <ul class="dropdown-menu pages">
                    <li>
                      <div class="yamm-content">
                        <div class="row">
                          <div class="col-xs-12 col-menu">
                            <ul class="links">
                              <li><a href="home.html">Home</a></li>
                              <li><a href="category.html">Category</a></li>
                              <li><a href="detail.html">Detail</a></li>
                              <li><a href="shopping-cart.html">Shopping Cart Summary</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="blog-details.html">Blog Detail</a></li>
                              <li><a href="contact.html">Contact</a></li>
                              <li><a href="sign-in.html">Sign In</a></li>
                              <li><a href="my-wishlist.html">Wishlist</a></li>
                              <li><a href="terms-conditions.html">Terms and Condition</a></li>
                              <li><a href="track-orders.html">Track Orders</a></li>
                              <li><a href="product-comparison.html">Product-Comparison</a></li>
                              <li><a href="faq.html">FAQ</a></li>
                              <li><a href="404.html">404</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </li>
                
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>

<!-- ============================================== HEADER : END ============================================== -->
  
        @yield('content');
        
      
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Liên Hệ</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class="toggle-footer" style="">
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>Số 97, Đường Vạn Xuân, Thôn Lai Xá, Xã Kim Chung, Hoài Đức, Hà Nội</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body">
                  <p>0777000747<br>
                    0967716594</p>
                </div>
              </li>
              <li class="media">
                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                <div class="media-body"> <span><a href="#">thuysinhmocaquarium@gmail.com</a></span> </div>
              </li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Dịch Vụ Khách Hàng</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              @if(Auth::check())
              <li class="first"><a href="{{url('customer')}}" title="Contact us">Tài Khoản Khách Hàng</a></li>
              <li><a href="{{url('history')}}" title="About us">Lịch Sử Đặt Hàng</a></li>
              @else
              <li class="first"><a href="{{url('sign')}}" title="Contact us">Tài Khoản Khách Hàng</a></li>
              <li><a href="{{url('sign')}}" title="About us">Lịch Sử Đặt Hàng</a></li>
              @endif
              <li><a href="{{url('contact')}}" title="faq">Tư Vấn</a></li>
              <li><a href="#" title="Popular Searches">Chương Trình Ưu Đãi</a></li>
              <li class="last"><a href="#" title="Where is my order?">Trợ Giúp</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="module-heading">
            <h4 class="module-title">Giới Thiệu Cửa Hàng</h4>
          </div>
          <!-- /.module-heading -->
          
          <div class="module-body">
            <ul class='list-unstyled'>
              <li class="first"><a title="Your Account" href="#">Thông Tin Chung</a></li>
              <li><a title="Information" href="#">Dịch Vụ</a></li>
              <li><a title="Addresses" href="#">Ưu Đãi</a></li>
              <li><a title="Addresses" href="#">Giao Hàng</a></li>
            </ul>
          </div>
          <!-- /.module-body --> 
        </div>
        <!-- /.col -->
        
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="logo"> <a href="{{url('home')}}"> <img src="{{asset('assets\images\logo97aqua.png')}}" alt="logo" height="200" width="200" style="position:absolute; left:30px; top:0px;"> </a> </div>
          <!-- /.module-body --> 
        </div>
      </div>
    </div>
  </div>
  
</footer>
<!-- ============================================================= FOOTER : END============================================================= --> 

<!-- For demo purposes – can be removed on production --> 

<!-- For demo purposes – can be removed on production : End --> 

<!-- JavaScripts placed at the end of the document so the pages load faster --> 
<script src="{{asset('assets\js\jquery-1.11.1.min.js')}}"></script> 
<script src="{{asset('assets\js\bootstrap.min.js')}}"></script> 
<script src="{{asset('assets\js\bootstrap-hover-dropdown.min.js')}}"></script> 
<script src="{{asset('assets\js\owl.carousel.min.js')}}"></script> 
<script src="{{asset('assets\js\echo.min.js')}}"></script> 
<script src="{{asset('assets\js\jquery.easing-1.3.min.js')}}"></script> 
<script src="{{asset('assets\js\bootstrap-slider.min.js')}}"></script> 
<script src="{{asset('assets\js\jquery.rateit.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets\js\lightbox.min.js')}}"></script> 
<script src="{{asset('assets\js\bootstrap-select.min.js')}}"></script> 
<script src="{{asset('assets\js\wow.min.js')}}"></script> 
<script src="{{asset('assets\js\scripts.js')}}"></script>
</body>
</html>