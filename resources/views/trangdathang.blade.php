@extends('master')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Thông Tin Đặt Hàng</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->	
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Điền Thông Tin Đặt Hàng</h4>
	<p class="text title-tag-line">Quý Khách Vui Lòng Điền Chính Xác Thông Tin Để Shop Giao Hàng Đến Quý Khách.</p>
	

    

    
	<form class="register-form outer-top-xs" role="form" action="{{url('postorder')}}" method="post">
		@csrf
		@if (Auth::check())
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Họ Và Tên: {{Auth::User()->name}}<span></span></label>
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Số Điện Thoại: {{Auth::User()->phone}}<span></span></label>
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Email: {{Auth::User()->email}}<span></span></label>
		</div>
		@elseif(!Auth::check())
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Họ và Tên Của Quý Khách:<span>*</span></label>
	    	<input name="HoTen" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Số Điện Thoại Nhận Hàng:<span>*</span></label>
		    <input name="SDT" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        @endif
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Địa Chỉ Nhận Hàng:<span>*</span></label>
		    <input name="DiaChi" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Ghi Chú (nếu quý khách muốn ghi thêm thông tin bổ sung):<span></span></label>
		    <input name="GhiChu" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Xác Nhận Thông Tin</button>
	</form>
	
	
</div>			
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Thông Tin Đơn Hàng Của Quý Khách</h4>
	@if(Session::has('cart'))
				
				@foreach($product_cart as $product) 
						    
						    <h4 class='cart-product-description'><img src="{{ asset('assets/images/products/' . $product['item']['Anh']) }}" alt="" height="100" width="100">{{$product['item']['TenSanPham']}}  </br>  Số Lượng: {{$product['qty']}}|Đơn Giá: {{$product['item']['GiaKhuyenMai']}}|Tổng Tiền: <b>{{$product['qty']*$product['item']['GiaKhuyenMai']}}</b></h4>
				
			</br>
				@endforeach
				<h3>Thanh Toán Khi Nhận Hàng: <b>{{Session('cart')->totalPrice}}(vnd)</b></h3>
	@elseif(!Session::has('cart'))
	<b>Quý Khách Đã Đặt Hàng Thành Công. Thời Gian Giao Hàng Dự Kiến Trong 3 Ngày. Vui Lòng Kiểm Tra Hàng Và Thanh Toán Khi Nhận Hàng</b>
	@endif
	
</div>	
			
</div>
<!-- Sign-in -->

<!-- create a new account -->

<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand3.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand6.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand2.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand4.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand1.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="assets/images/brands/brand5.png" src="assets\images\blank.gif" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
@endsection