@extends('master')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Tài Khoản Khách Hàng</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Thông Tin Khách Hàng</h4>
	{{-- <p class="">Hello, Welcome to your account.</p> --}}
	
	<form class="register-form outer-top-xs" role="form">
		
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Mã Khách Hàng: {{Auth::User()->id}}<span></span></label>
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Họ Và Tên: {{Auth::User()->name}}<span></span></label>
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Số Điện Thoại: {{Auth::User()->phone}}<span></span></label>
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Email: {{Auth::User()->email}}<span></span></label>
		</div>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
{{-- <div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Tạo Tài Khoản (Nếu Đã Tạo Tài Khoản Thành Công Hãy Nhập Thông Tin Vừa Tạo Vào Phần Đăng Nhập)</h4>
	<p class="text title-tag-line">Nếu Chưa Có Tài Khoản Anh Chị Vui Lòng Điền Thông Tin Tạo Tài Khoản Khách Hàng Để Trải Nghiệm Đầy Đủ Dịch Vụ Tiện Ích.</p>
	<form class="register-form outer-top-xs" role="form" action="{{url('postsign')}}" method="post">
		@csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Họ và Tên Của Anh Chị <span>*</span></label>
		    <input name="HoTen" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Địa Chỉ Email Của Anh Chị<span>*</span></label>
	    	<input name="Email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Số Điện Thoại <span>*</span></label>
		    <input name="SDT" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Tạo Mật Khẩu <span>*</span></label>
		    <input name="MatKhau" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		
	</br>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Xác Nhận Tạo Tài Khoản</button>
	</form>
	
	
</div>	 --}}
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