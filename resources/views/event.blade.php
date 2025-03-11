<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>LeBari Education HTML-5 Template | Events</title>
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
								<a href="index.html"><img src="{{asset('assets/images/logo-2.png')}}" alt="" /></a>
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
	
	<!-- Page Title Section Two -->
    <section class="page-title-section-two">
		<div class="pattern-layer-one" style="background-image: url(images/icons/icon-5.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/icons/icon-6.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-4.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images2/icons/icon-29.png)"></div>
		<div class="auto-container">
			<!-- Page Breadcrumb -->
			<ul class="page-breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li>Event List</li>
			</ul>
			<div class="content-box">
				<h2>Event List</h2>
			</div>
		</div>
	</section>
	<!-- End Page Title Section Two -->
	
	<!-- Event Page Section -->
    <section class="event-page-section">
		<div class="pattern-layer-three" style="background-image: url(images/icons/icon-8.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Event Block Two -->
				<div class="event-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="event-detail.html"><img src="{{asset('assets/images2/resource/event-4.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="category">Online</div>
							<h4><a href="event-detail.html">Special Education Leaders Network by West40</a></h4>
							<div class="clearfix">
								<div class="pull-left">
									<div class="post-date">September 1, 2025</div>
								</div>
								<div class="pull-right">
									<a href="event-detail.html" class="attend-link">Attend</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Event Block Two -->
				<div class="event-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="event-detail.html"><img src="{{asset('assets/images2/resource/event-5.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="category">school</div>
							<h4><a href="event-detail.html">Salters' Chemistry Club Handbook</a></h4>
							<div class="clearfix">
								<div class="pull-left">
									<div class="post-date">September 1, 2025</div>
								</div>
								<div class="pull-right">
									<a href="event-detail.html" class="attend-link">Attend</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Event Block Two -->
				<div class="event-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="event-detail.html"><img src="{{asset('assets/images2/resource/event-6.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="category">Online</div>
							<h4><a href="event-detail.html">International Day of Peace September 21</a></h4>
							<div class="clearfix">
								<div class="pull-left">
									<div class="post-date">September 1, 2025</div>
								</div>
								<div class="pull-right">
									<a href="event-detail.html" class="attend-link">Attend</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Event Block Two -->
				<div class="event-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="event-detail.html"><img src="{{asset('assets/images2/resource/event-7.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="category">Online</div>
							<h4><a href="event-detail.html">Special Education Leaders Network by West40</a></h4>
							<div class="clearfix">
								<div class="pull-left">
									<div class="post-date">September 1, 2025</div>
								</div>
								<div class="pull-right">
									<a href="event-detail.html" class="attend-link">Attend</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Event Block Two -->
				<div class="event-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="event-detail.html"><img src="{{asset('assets/images2/resource/event-8.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="category">school</div>
							<h4><a href="event-detail.html">Salters' Chemistry Club Handbook</a></h4>
							<div class="clearfix">
								<div class="pull-left">
									<div class="post-date">September 1, 2025</div>
								</div>
								<div class="pull-right">
									<a href="event-detail.html" class="attend-link">Attend</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Event Block Two -->
				<div class="event-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<a href="event-detail.html"><img src="{{asset('assets/images2/resource/event-9.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<div class="category">Online</div>
							<h4><a href="event-detail.html">International Day of Peace September 21</a></h4>
							<div class="clearfix">
								<div class="pull-left">
									<div class="post-date">September 1, 2025</div>
								</div>
								<div class="pull-right">
									<a href="event-detail.html" class="attend-link">Attend</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Event Page Section -->
	
	<!-- Main Footer -->
    <footer class="main-footer">
		<div class="circle-layer"></div>
		<div class="pattern-layer-one" style="background-image: url(images/background/pattern-12.png)"></div>
		<div class="pattern-layer-two" style="background-image: url(images/background/pattern-13.png)"></div>
		<div class="pattern-layer-three" style="background-image: url(images/background/pattern-14.png)"></div>
		<div class="pattern-layer-four" style="background-image: url(images/background/pattern-13.png)"></div>
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

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/parallax.min.js')}}"></script>
<script src="{{asset('assets/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.paroller.min.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/validate.js')}}"></script>
<script src="{{asset('assets/js/nav-tool.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>

</body>
</html>