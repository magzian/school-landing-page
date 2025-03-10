<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>LeBari Education HTML-5 Template | About Us</title>
<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Header / Header Style Two -->
	 <header class="main-header header-style-four">
		<!-- Header Lower -->
		<div class="header-lower">
			<div class="lower-inner">
				<div class="outer-container">
					<div class="inner-container d-flex justify-content-between align-items-center">
						
						<!-- Logo on the left -->
						<div class="logo-box">
							<div class="logo">
								<a href="index.html">
									<img src="{{asset('assets/images/logo-2.png')}}" alt="Logo" title="Logo">
								</a>
							</div>
						</div>
	
						<!-- Navigation on the right -->
						<div class="nav-outer">
							<nav class="main-menu navbar navbar-expand-md">
								<div class="container-fluid">
									<div class="navbar-header">
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
											aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
	
									<div class="navbar-collapse collapse" id="navbarSupportedContent">
										<ul class="navigation navbar-nav ms-auto"> 
											<li class="nav-item dropdown">
												<a href="#" class="nav-link">Home</a>	
											</li>
											<li class="nav-item">
												<a href="{{route('about')}}" class="nav-link">About Us</a>
											</li>
											<li class="nav-item">
												<a href="{{route('event')}}" class="nav-link">Events</a>
											</li>
											<li class="nav-item">
												<a href="{{route('contact')}}" class="nav-link">Contact</a>
											</li>
										</ul>
									</div>
								</div>
							</nav>
						</div>
	
					</div>
				</div>
			</div>
		</div>
	</header>
    <!-- End Main Header -->
	
	<!-- Sidebar Cart Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">
					
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="logo">
								<a href="index.html"><img src="images/logo-2.png" alt="" /></a>
							</div>
							<div class="content-box">
								<h2>About Us</h2>
								<p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
								<a href="#" class="theme-btn btn-style-two"><span class="txt">Consultation</span></a>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-two">
									<li><span class="icon fa fa-location-arrow"></span>Chicago 12, Melborne City, USA</li>
									<li><span class="icon fa fa-phone"></span>(111) 111-111-1111</li>
									<li><span class="icon fa fa-envelope"></span>lebari@gmail.com</li>
									<li><span class="icon fa fa-clock-o"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fa fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fa fa-twitter"></a></li>
								<li class="linkedin"><a href="#" class="fa fa-linkedin"></a></li>
								<li class="instagram"><a href="#" class="fa fa-instagram"></a></li>
								<li class="youtube"><a href="#" class="fa fa-youtube"></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END sidebar widget item -->
	
	<!-- Banner Section Three -->
    <section class="banner-section-three">
		<div class="pattern-layer-two" style="background-image: url('{{ asset('assets/images/background/pattern-21.png') }}');"></div>

		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>About</li>
			</ul>
            <div class="row clearfix">
				
				<!-- Content Column -->
				<div class="content-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-one" style="background-image: url('{{ asset('assets/images/main-slider/pattern-1.png') }}');"></div>
						<div class="icon-layer" style="background-image: url('{{ asset('assets/images/icons/icon-2.png') }}');"></div>
						<div class="icon-layer-two" style="background-image: url('{{ asset('assets/images/icons/icon-5.png') }}');"></div>

						<h2>Our mission is to provide <br> a free Online <br> Courses and Class</h2>
					</div>
				</div>
				
				<!-- Images Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer-three" style="background-image: url('{{ asset('assets/images/icons/icon-3.png') }}');"></div>
						<div class="icon-layer-four" style="background-image: url('{{ asset('assets/images/icons/icon-2.png') }}');"></div>
						<div class="icon-layer-five" style="background-image: url('{{ asset('assets/images/icons/icon-4.png') }}');"></div>
						
						<div class="image">
							<img src="{{asset('assets/images/resource/page-title-1.jpg')}}" alt="" />
						</div>
						<div class="image-two">
							<img src="{{asset('assets/images/resource/page-title-2.jpg')}}" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Banner Section Three -->
	
	<!-- Goal Section -->
	<section class="goal-section style-two">
		<div class="pattern-layer-four" style="background-image: url('{{ asset('assets/images/background/pattern-18.png') }}');"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="color-layer"></div>
					<div class="inner-column">
						<div class="pattern-layer" style="background-image:url(images/background/pattern-4.png)"></div>
						<div class="pattern-layer-two" style="background-image:url(images/background/pattern-17.png)"></div>
						<div class="image">
							<img src="{{asset('assets/images/resource/goal-1.jpg')}}" alt="" />
						</div>
						<div class="image-two">
							<img src="{{asset('assets/images/resource/goal-2.jpg')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-three" style="background-image:url(images/background/pattern-13.png)"></div>
						<div class="sec-title">
							<div class="title">Achieve Goals</div>
							<h2>Start To Success</h2>
							<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur Duis aute irure dolor in</div>
						</div>
						
						<!-- Fact Counter -->
						<div class="fact-counter">
							<div class="row clearfix">

								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3000" data-stop="36">0</span>+
											</div>
											<h4 class="counter-title">Over 35 Free Courses</h4>
										</div>
									</div>
								</div>

								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box alternate">
												<span class="count-text" data-speed="5000" data-stop="34">0</span>
											</div>
											<h4 class="counter-title">Member State Associations</h4>
										</div>
									</div>
								</div>

								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="2000" data-stop="15">0</span>k
											</div>
											<h4 class="counter-title">Over 19,000 High Schools</h4>
										</div>
									</div>
								</div>

								<!-- Column -->
								<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
									<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
										<div class="content">
											<div class="count-outer count-box">
												<span class="count-text" data-speed="3500" data-stop="20">0</span>m
											</div>
											<h4 class="counter-title">Over 11 million Students</h4>
										</div>
									</div>
								</div>

							</div>
						</div>
						
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Goal Section -->
	
	<!-- Skill Section -->
	<section class="skill-section">
		<div class="pattern-layer" style="background-image: url('{{ asset('assets/images/background/pattern-8.png') }}');"></div>

		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Skill Column -->
				<div class="skill-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<div class="title">Our Status valu</div>
							<h2>Differentiate your classroom <br> What makes us special?</h2>
							<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
						</div>
						
						<!-- Skills -->
						<div class="skills">

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Joyful</div>
									<div class="skill-percentage">
										<div class="count-box">
											<span class="count-text" data-speed="2000" data-stop="90">0</span>%
										</div>
									</div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="90"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Case Study success </div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="95">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="95"></div></div>
								</div>
							</div>

							<!-- Skill Item -->
							<div class="skill-item">
								<div class="skill-header clearfix">
									<div class="skill-title">Engaging</div>
									<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="75">0</span>%</div></div>
								</div>
								<div class="skill-bar">
									<div class="bar-inner"><div class="bar progress-line" data-width="75"></div></div>
								</div>
							</div>

						</div>
						
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="circle-one"></div>
						<div class="circle-two"></div>
						<div class="image titlt" data-tilt data-tilt-max="4">
							<img src="{{asset('assets/images/resource/skill.png')}}" alt="" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Skill Section -->
	
	<!-- Professional Section -->
	<section class="professional-section style-two">
		<div class="background-layer-one" style="background-image: url('{{ asset('assets/images/background/pattern-5.png') }}');"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Images Column -->
				<div class="images-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer" style="background-image: url('{{ asset('assets/images/background/pattern-3.png') }}');"></div>
						<div class="pattern-layer-two" style="background-image: url('{{ asset('assets/images/background/pattern-4.png') }}');"></div>
						
						<div class="color-layer"></div>
						<div class="color-layer-two"></div>
						<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<img src="{{asset('assets/images/resource/professional.jpg')}}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="pattern-layer-three" style="background-image: url('{{ asset('assets/images/background/pattern-16.png') }}');"></div>

						<div class="sec-title">
							<div class="title">Learn anything</div>
							<h2>Take online courses Earn <br> professional</h2>
						</div>
						<div class="bold-text">Position yourself for success with a variety of collegeclasses including general education courses</div>
						<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
						<div class="btn-box">
							<a href="course-detail.html" class="theme-btn btn-style-four"><span class="txt">Short courses</span></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Professional Section -->
	
	<!-- Testimonial Section Two -->
	<section class="testimonial-section-two">
		<div class="circle-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="circle-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="horizontal"></div>
		<div class="pattern-layer-two" style="background-image: url('{{ asset('assets/images/background/pattern-10.png') }}');"></div>
			<div class="auto-container">
				<div class="inner-container">
        		<div class="pattern-layer" style="background-image: url('{{ asset('assets/images/background/pattern-9.png') }}');"></div>
				<!-- Sec Title -->
				<div class="sec-title centered">
					<div class="title">Testimonial</div>
					<h2>Words From Customers</h2>
					<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu <br> fugiat nulla pariatur Duis aute irure dolor in reprehenderit in</div>
				</div>
				<div class="testimonial-carousel-two owl-carousel owl-theme">
				
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-1.jpg')}}" alt="" />
									</div>
									<h6>Mahfuz Riad</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-2.jpg')}}" alt="" />
									</div>
									<h6>Shopnil mahadi</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-3.jpg')}}" alt="" />
									</div>
									<h6>Alamin Sa</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-1.jpg')}}" alt="" />
									</div>
									<h6>Mahfuz Riad</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-2.jpg')}} " alt="" />
									</div>
									<h6>Shopnil mahadi</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-3.jpg')}} " alt="" />
									</div>
									<h6>Alamin Sa</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-1.jpg')}} " alt="" />
									</div>
									<h6>Mahfuz Riad</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-2.jpg')}} " alt="" />
									</div>
									<h6>Shopnil mahadi</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
					
					<!-- Testimonial Block Two -->
					<div class="testimonial-block-two">
						<div class="inner-box">
							<div class="border-layer"></div>
							<div class="text">From exhibitions and dinners, to celebrations and conferences, the University of Bath is a great place to hold any event.</div>
							<div class="author-info">
								<div class="info-inner">
									<div class="author-image">
										<img src="{{asset('assets/images/resource/author-3.jpg')}} " alt="" />
									</div>
									<h6>Alamin Sa</h6>
									<div class="designation">Online Teacher</div>
								</div>
							</div>
							<div class="quote-icon flaticon-quote-2"></div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>
	
	<!-- Team Section -->
	<section class="team-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="color-layer"></div>
				<div class="pattern-layer" style="background-image: url('{{ asset('assets/images/background/pattern-18.png') }}');"></div>

				<div class="row clearfix">
					
					<!-- Title Column -->
					<div class="title-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="sec-title">
								<div class="title">Teacher</div>
								<h2>Our best online Techer</h2>
								<div class="text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
							</div>
							<a href="profile.html" class="theme-btn btn-style-one"><span class="txt">View More</span></a>
						</div>
					</div>
					
					<!-- Blocks Column -->
					<div class="blocks-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="row clearfix">
								
								<!-- Team Block -->
								<div class="team-block col-lg-6 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image">
											<a href="course-detail.html"><img src="{{asset('assets/images/resource/team-1.jpg')}} " alt="" /></a>
										</div>
										<div class="lower-content">
											<h5><a href="course-detail.html">Mahfuz Riad</a></h5>
											<div class="designation">- Designer, themeforest</div>
										</div>
									</div>
								</div>
								
								<!-- Team Block -->
								<div class="team-block col-lg-6 col-md-6 col-sm-12">
									<div class="inner-box">
										<div class="image">
											<a href="course-detail.html"><img src="{{asset('assets/images/resource/team-2.jpg')}}" alt="" /></a>
										</div>
										<div class="lower-content">
											<h5><a href="course-detail.html">Tamim megh</a></h5>
											<div class="designation">- Designer, themeforest</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->
	
	<!-- Clients Section -->
	<section class="clients-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Key supporters</h2>
				<div class="text">These leading universities are currently offering online degree <br> courses on FutureLearn:</div>
			</div>
			
			<div class="sponsors-outer">
				<!--Sponsors Carousel-->
				<ul class="sponsors-carousel owl-carousel owl-theme">
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/4.png') }}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/5.png') }}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/1.png') }}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/2.png') }}" alt=""></a></figure></li>
					<li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/clients/3.png') }}" alt=""></a></figure></li>
					
				</ul>
			</div>
			
		</div>
	</section>
	<!-- End Clients Section -->
	
	<!-- Contact Section -->
	<section class="contact-section">
		<div class="pattern-layer" style="background-image:url('{{ asset('assets/images/background/pattern-19.png') }}')"></div>
		<div class="pattern-layer-two" style="background-image:url('{{ asset('assets/images/background/pattern-20.png') }}')"></div>
		<div class="icon-layer-two" style="background-image:url('{{ asset('assets/images/icons/icon-2.png') }}')"></div>
		<div class="icon-layer-three" style="background-image:url('{{ asset('assets/images/icons/icon-2.png') }}')"></div>

		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="icon-layer" style="background-image: url('{{ asset('assets/images/icons/icon-2.png') }}');"></div>

						<div class="image">
							<img src="{{asset('assets/images/resource/contact.png')}}" alt="" />
						</div>
						<h5>Contact us</h5>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page </p>
						<ul class="contact-list">
							<li>
								<strong>Phone:</strong>
								<a href="tel:+88-01682648101">+88 01682648101</a>
							</li>
							<li>
								<strong>Email:</strong>
								<a href="mailo:hello@lebari.com">hello@lebari.com</a>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="color-layer"></div>
						<!-- Sec Title -->
						<div class="sec-title">
							<h2> Visit us <br> for Free Resources</h2>
							<div class="text">These leading universities are currently offering online degree courses on FutureLearn:</div>
						</div>
						
						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="contact.html">
								<div class="row clearfix">
								
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="username" value="" placeholder="First Name" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="lastname" value="" placeholder="Last Name" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<input type="email" name="email" value="" placeholder="Email" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<select name="country" class="custom-select-box">
											<option>When you want to start courses</option>
											<option>courses 01</option>
											<option>courses 02</option>
											<option>courses 03</option>
											<option>courses 04</option>
										</select>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="date" value="" placeholder="Date" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="time" value="" placeholder="Time" required>
									</div>
									
									<!-- Form Group -->
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea placeholder="Type you comment here"></textarea>
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="theme-btn btn-style-one"><span class="txt">Submit</span></button>
									</div>
                                </div>
                            </form>
                        </div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Contact Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="circle-layer"></div>
		<div class="pattern-layer-one" style="background-image: url('{{ asset('assets/images/background/pattern-12.png') }}');"></div>
		<div class="pattern-layer-two" style="background-image: url('{{ asset('assets/images/background/pattern-13.png') }}');"></div>
		<div class="pattern-layer-three" style="background-image: url('{{ asset('assets/images/background/pattern-14.png') }}');"></div>
		<div class="pattern-layer-four" style="background-image: url('{{ asset('assets/images/background/pattern-13.png') }}');"></div>

    	<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
					<!-- Footer Column -->
					<div class="footer-column col-lg-5 col-md-12 col-sm-12">
						<div class="footer-widget logo-widget">
							<div class="logo">
								<a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="" /></a>
							</div>
							<ul class="info-list">
								<li>Tel:<a href="tel:+0845-371-02-02"> 0845 371 02 02</a></li>
								<li>Email:<a href="mailto:info@yoursite.co.uk"> info@yoursite.co.uk</a></li>
							</ul>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="twitter"><a target="_blank" href="http://twitter.com/" class="fa fa-twitter"></a></li>
								<li class="pinterest"><a target="_blank" href="http://pinterest.com/" class="fa fa-pinterest-p"></a></li>
								<li class="facebook"><a target="_blank" href="http://facebook.com/" class="fa fa-facebook-f"></a></li>
								<li class="dribbble"><a target="_blank" href="http://dribbble.com/" class="fa fa-dribbble"></a></li>
							</ul>
							<div class="text">Get started now and take advantage of <br> our 30 day free trial today.</div>
						</div>
					</div>
					
					<!-- Footer Column -->
					<div class="footer-column col-lg-7 col-md-12 col-sm-12">
						<div class="row clearfix">
							<!-- Column -->
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<h5>About</h5>
								<ul class="list">
									<li><a href="#">About</a></li>
									<li><a href="#">News</a></li>
									<li><a href="#">Impact</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Our interns</a></li>
								</ul>
							</div>
							<!-- Column -->
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<h5>Need some help?</h5>
								<ul class="list">
									<li><a href="#">FAQs</a></li>
									<li><a href="#">Child safety</a></li>
									<li><a href="#">Help Centre</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Academy</a></li>
								</ul>
							</div>
							<!-- Column -->
							<div class="column col-lg-4 col-md-4 col-sm-12">
								<h5>Courses</h5>
								<ul class="list">
									<li><a href="#">Khan Kids app</a></li>
									<li><a href="#">Science & engineering</a></li>
									<li><a href="#">Computing</a></li>
									<li><a href="#">Arts & humanities</a></li>
									<li><a href="#">Economics & finance</a></li>
								</ul>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Lower Box -->
            <div class="lower-box">
            	<div class="row clearfix">
					<div class="col-lg-6 col-lg-6 col-sm-12">
						<!-- Subscribe Form -->
						<div class="subscribe-form">
							<h6>Newsletter</h6>
							<form method="post" action="contact.html">
								<div class="form-group">
									<input type="email" name="email" value="" placeholder="Your email" required>
									<button type="submit" class="submit-btn"><span class="icon flaticon-right-arrow-2"></span></button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-lg-6 col-sm-12">
						<div class="text">Need to train your team? We offer flexible, cost-effective <br> group memberships for your business, school,</div>
						<a href="#" class="singup">Free Singup</a>
					</div>
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="row clearfix">
					
					<!-- Copyright Column -->
					<div class="copyright-column col-lg-6 col-md-12 col-sm-12">
						<div class="copyright">Copyright 2020, All Right Reserved</div>
					</div>
					
					<!-- Nav Column -->
					<div class="nav-column col-lg-6 col-md-12 col-sm-12">
						<ul>
							<li><a href="about.html">SiteMap</a></li>
							<li><a href="about.html">Privacy Policy</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="{{asset('assets/js/jquery.js')}} "></script>
<script src="{{asset('assets/js/popper.min.js')}} "></script>
<script src="{{asset('assets/js/bootstrap.min.js')}} "></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}} "></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}} "></script>
<script src="{{asset('assets/js/appear.js')}} "></script>
<script src="{{asset('assets/js/parallax.min.js')}} "></script>
<script src="{{asset('assets/js/tilt.jquery.min.js')}} "></script>
<script src="{{asset('assets/js/jquery.paroller.min.js')}} "></script>
<script src="{{asset('assets/js/owl.js')}} "></script>
<script src="{{asset('assets/js/wow.js')}} "></script>
<script src="{{asset('assets/js/nav-tool.js')}} "></script>
<script src="{{asset('assets/js/jquery-ui.js')}} "></script>
<script src="{{asset('assets/js/script.js')}} "></script>

</body>
</html>