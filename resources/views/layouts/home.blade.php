<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>LeBari HTML Template | Homepage 04</title>

<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Glory:wght@100;300;400;500;600;700;800&family=Lato:wght@100;300;400;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
	@include('components.header')
    <!-- End Main Header -->
	
    <!-- Banner Slider Five -->
    <section class="banner-section-five">
		<div class="icon-layer-one" style="background-image: url('{{ asset('assets/images2/main-slider/pattern-2.png') }}');"></div>
		<div class="icon-layer-two" style="background-image: url('{{ asset('assets/images2/main-slider/pattern-3.png') }}');"></div>
		<div class="icon-layer-three" style="background-image: url('{{ asset('assets/images2/main-slider/pattern-4.png') }}');"></div>
		<div class="icon-layer-four" style="background-image: url('{{ asset('assets/images2/main-slider/pattern-5.png') }}');"></div>
		<div class="icon-layer-five" style="background-image: url('{{ asset('assets/images2/main-slider/pattern-6.png') }}');"></div>
		<div class="icon-layer-seven" style="background-image: url('{{ asset('assets/images2/main-slider/pattern-8.png') }}');"></div>
		<div class="icon-layer-eight" style="background-image: url('{{ asset('assets/images2/main-slider/pattern-9.png') }}');"></div>		
    	<div class="auto-container">
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title">Admission Open (2022-2022)</div>
						<h1>Inspiring today's children to succeed in tomorrow's world.</h1>
						<a class="theme-btn btn-style-eight" href="contact.html"><span class="txt">Apply Today</span></a>
						<a class="schedule-link" href="#">SCHEDULE A CALL</a>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-six" style="background-image:url(images2/main-slider/pattern-7.png)"></div>
						<div class="image">
							<img src="{{asset('assets/images2/main-slider/content-image-1.png')}}" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		
        </div>
    </section>
    <!-- End Banner Slider Three -->
	
	<!-- About Slider -->

	{{-- @include('components.about-section') --}}

	<section class="about-section">
		<div class="color-layer"></div>
		<div class="pattern-layer-two" style="background-image:url(images2/icons/pattern-15.png)"></div>
		<div class="auto-container">
            <div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="kids-title">Kids</div>
						<div class="pattern-layer" style="background-image:url(images2/background/pattern-15.png)"></div>
						<div class="image">
							<img src="{{asset('assets/images2/resource/about-1.jpg') }}" alt="" />
						</div>
						<div class="image-two">
							<img src="{{asset('assets/images2/resource/about-2.jpg')}} " alt="" />
						</div>
						<div class="image-three">
							<img src="{{asset('assets/images2/resource/about-3.jpg')}} " alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="sec-title-two">
							<div class="title">About us</div>
							<h2>Welcome To lebari Kindergarten</h2>
						</div>
						<div class="dark-text">Our unique learning environment sparks physical growth and discovery while our creative curriculum which combines the traditional and the progressive </div>
						<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </div>
						<div class="row clearfix">
							
							<!-- Feature Column -->
							<div class="feature-column col-lg-6 col-md-6 col-sm-12">
								<div class="feature-inner">
									<div class="icon"><img src=" {{asset('assets/images2/icons/feature-1.png')}} " alt="" /></div>
									<strong>Learn new skills</strong>
									With flexible courses
								</div>
							</div>
							
							<!-- Feature Column -->
							<div class="feature-column col-lg-6 col-md-6 col-sm-12">
								<div class="feature-inner">
									<div class="icon"><img src=" {{asset('assets/images2/icons/feature-2.png')}} " alt="" /></div>
									<strong>Online Degrees</strong>
									Study flexibly online
								</div>
							</div>
							
						</div>
						<!-- Button Box -->
						<div class="button-box">
							<a class="theme-btn btn-style-nine" href="about.html"><span class="txt">Our Approach</span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	<!-- End About Slider -->
	
	<!-- Program Slider -->

	@include('components.program-section')

	<!-- End Program Slider -->
	
	<!-- Mission Section -->

	@include('components.mission-section')

	<!-- End Mission Section -->
	
	<!-- Event Section Two -->
	
	@include('components.event')

	<!-- End Event Section Two -->
	
	<!-- Feature Section Three -->
	@include('components.feature')
	<!-- End Feature Section Three -->
	
	<!-- Testimonial Section Four -->
	@include('components.testimonial')
	<!-- End Testimonial Section Four -->
	
	<!-- Newsletter Section Three -->
	@include('components.newsletter')
	<!-- End Newsletter Section Three -->
	
	<!-- Footer Style Three -->
	@include('components.footer')
	<!-- End Footer Style Three -->
	
</div>
<!--End pagewrapper-->

<!-- Header Search -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-multiply"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{ asset('assets/js/jquery.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('assets/js/appear.js')}}"></script>
<script src="{{ asset('assets/js/nav-tool.js')}}"></script>
<script src="{{ asset('assets/js/mixitup.js')}}"></script>
<script src="{{ asset('assets/js/owl.js')}}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/wow.js')}}"></script>
<script src="{{ asset('assets/js/isotope.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/js/script.js')}}"></script>

</body>
</html>