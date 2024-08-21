@extends('master')
@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Partner Login</li>
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
	<h4 class="">Đăng Nhập</h4>
	{{-- <p class="">Hello, Welcome to your account.</p> --}}
	<div class="social-sign-in outer-top-xs">
		
	</div>
	<form class="register-form outer-top-xs" role="form" action="{{url('postlogin_partner')}}" method="post">
		@csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Số Điện Thoại Doanh Nghiệp: <span>*</span></label>
		    <input name="SDT" class="form-control unicase-form-control text-input" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Mật Khẩu: <span>*</span></label>
		    <input name="MatKhau" type="password" class="form-control unicase-form-control text-input">
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Lưu Thông Tin Đăng Nhập
		  	</label>
		  	<a href="#" class="forgot-password pull-right">Quên Mật Khẩu?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Đăng Nhập</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Tạo Tài Khoản Đối Tác</h4>
	<form class="register-form outer-top-xs" role="form" action="{{url('postsign_partner')}}" method="post">
		@csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Tên Doanh Nghiệp <span>*</span></label>
		    <input name="TenDoiTac" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Địa Chỉ Email Doanh Nghiệp<span>*</span></label>
	    	<input name="Email" class="form-control unicase-form-control text-input" id="exampleInputEmail2">
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Số Điện Thoại Doanh Nghiệp <span>*</span></label>
		    <input name="SDT" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Tạo Mật Khẩu <span>*</span></label>
		    <input name="MatKhau" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		{{-- </div>
         <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Xác Nhận Mật Khẩu <span>*</span></label>
		    <input name="xnMatKhau" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
		</div> --}}
	</br>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Xác Nhận Tạo Tài Khoản</button>
	</form>
	
	
</div>	
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