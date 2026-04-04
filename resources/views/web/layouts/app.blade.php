<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?= $metaData['seoData']->title ?></title>
	<meta name="description" content="<?= $metaData['seoData']->description ?>">
	<meta name="keywords" content="<?= $metaData['seoData']->keywords ?>">
	<?php if (!empty($metaData['seoData']->meta) && $metaData['seoData']->meta != "NA"): ?>
		<?= $metaData['seoData']->meta ?>
	<?php endif ?>

	<!-- Stylesheets -->
	<link href="<?= url("assets/css/bootstrap.css") ?>" rel="stylesheet">
	<link href="<?= url("assets/css/style.css") ?>" rel="stylesheet">
	<link href="<?= url("assets/css/meanmenu.min.css") ?>" rel="stylesheet">
	<link href="<?= url("assets/css/responsive.css") ?>" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

	<!-- Color Switcher Mockup -->
	<link href="<?= url("assets/css/color-switcher-design.css") ?>" rel="stylesheet">

	<!-- Color Themes -->
	<link id="theme-color-file" href="<?= url("assets/css/color-themes/default-color.css") ?>" rel="stylesheet">

	<link rel="shortcut icon" href="<?= url('favicon.ico') ?>" type="image/x-icon">
	<link rel="icon" href="<?= url('favicon.ico') ?>" type="image/x-icon">
	<link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<!-- Lightbox CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet" />

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<style>
		@media screen and (min-width: 1200px) {
			.service-image {
				height: 400px !important;
				width: 306px !important;
			}
		}

		.whatsapp-float {
			position: fixed;
			width: 60px;
			height: 60px;
			bottom: 40px;
			right: 40px;
			background-color: #25D366;
			color: #fff;
			border-radius: 50px;
			text-align: center;
			font-size: 30px;
			box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
			z-index: 100;
		}

		.whatsapp-float:hover {
			background-color: #128C7E;
			transition: background-color 0.3s ease;
		}

		.whatsapp-icon {
			margin-top: 13px;
		}

		/* Move Lightbox navigation arrows outside the image */
		.lb-nav a.lb-prev,
		.lb-nav a.lb-next {
			opacity: 1 !important;
			width: 60px;
		}

		.lb-nav a.lb-prev {
			left: -60px !important;
		}

		.lb-nav a.lb-next {
			right: -60px !important;
		}

		.lb-nav a.lb-prev::before,
		.lb-nav a.lb-next::before {
			font-size: 40px !important;
			text-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
		}
	</style>

	<?php if (!empty($metaData['seoData']->schema) && $metaData['seoData']->schema != "NA"): ?>
		<?= $metaData['seoData']->schema ?>
	<?php endif ?>
	<?php if (!empty($metaData['seoData']->gtag_head) && $metaData['seoData']->gtag_head != "NA"): ?>
		<?= $metaData['seoData']->gtag_head ?>
	<?php endif ?>

</head>

<body>
	<?php if (!empty($metaData['seoData']->gtag_body) && $metaData['seoData']->gtag_body != "NA"): ?>
		<?= $metaData['seoData']->gtag_body ?>
	<?php endif ?>

	<div class="page-wrapper">

		<!-- Cursor -->
		<div class="cursor"></div>
		<div class="cursor-follower"></div>
		<!-- Cursor End -->

		<!-- Preloader -->
		<div class="preloader">
			<div class="loader">
				<div class="outer-circle"></div>
				<div class="inner-circle"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- End Preloader -->

		<!-- Main Header -->
		<header class="main-header header-style-one">

			<!-- Header Lower -->
			<div class="header-lower">
				<div class="auto-container">
					<div class="inner-container">
						<div class="d-flex justify-content-between align-items-center">

							<div class="logo-box">
								<div class="logo"><a href="<?= url('/') ?>"><img src="<?= url('assets/images/logo.png') ?>" alt="{{ $siteSettings['company_name'] ?? '' }}" title="{{ $siteSettings['company_name'] ?? '' }}" style="height:80px; width:auto;"></a></div>
							</div>

							<div class="nav-outer d-flex flex-wrap">
								<!-- Main Menu -->
								<nav class="main-menu navbar-expand-md">
									<div class="navbar-header">
										<!-- Toggle Button -->
										<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
										<ul class="navigation clearfix">
											<li><a href="<?= url('/') ?>">Home</a></li>
											<li><a href="<?= url('/about-us') ?>">About Us</a></li>
											<li><a href="<?= url('/services') ?>">Services</a></li>
											<li><a href="<?= url('/projects') ?>">Projects</a></li>
											<li><a href="<?= url('/faqs') ?>">FAQ's</a></li>
											<li><a href="<?= url('/blogs') ?>">Blogs</a></li>
											<li><a href="<?= url('/gallery') ?>">Gallery</a></li>
											<li><a href="<?= url('/contact-us') ?>">Contact Us</a></li>
										</ul>
									</div>
								</nav>
							</div>

							<!-- Main Menu End-->
							<div class="outer-box d-flex align-items-center flex-wrap">

								<!-- Search Btn (hidden) -->

								<!-- Button Box -->
								<div class="main-header_button">
									<a href="<?= url('/book-appointment') ?>" class="theme-btn btn-style-three">
										<span class="btn-wrap">
											<span class="text-one">GET A QUOTE <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
											<span class="text-two">GET A QUOTE <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
										</span>
									</a>
								</div>

								<!-- About Widget -->
								<span class="about-widget">
									<span class="hamburger">
										<span class="top-bun"></span>
										<span class="meat"></span>
										<span class="bottom-bun"></span>
									</span>
								</span>

								<!-- Mobile Navigation Toggler -->
								<div class="mobile-nav-toggler"><span class="icon fa-classic fa-solid fa-bars fa-fw"></span></div>

							</div>

						</div>
					</div>
				</div>
			</div>
			<!--End Header Lower-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon fa-xmark"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="<?= url('/') ?>"><img src="<?= url('assets/images/logo.png') ?>" alt="" title="" style="height:80px; width:auto;"></a></div>
					<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
				</nav>
			</div>
			<!-- End Mobile Menu -->

		</header>
		<!-- End Main Header -->

		@yield('content')

		<!-- Main Footer -->
		<footer class="main-footer" style="position:relative;">
			<div class="main-footer_bg" style="background-image:url(<?= url('assets/images/background/1.jpg') ?>)"></div>
			<div style="position:absolute; top:0; left:0; right:0; bottom:0; background:rgba(0,0,0,0.75); z-index:0;"></div>
			<div class="auto-container" style="position:relative; z-index:1;">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="main-footer_column col-lg-7 col-md-6 col-sm-12">
									<div class="logo-widget">
										<div class="main-footer_logo"><a href="<?= url('/') ?>"><img src="<?= url('assets/images/logo.png') ?>" alt="{{ $siteSettings['company_name'] ?? '' }}" title="{{ $siteSettings['company_name'] ?? '' }}" style="height:80px; width:auto; background:rgba(255,255,255,0.9); padding:8px 12px; border-radius:10px;"></a></div>
										<div class="main-footer_text" style="color:#fff;">{{ $siteSettings['footer_text'] ?? '' }}</div>
										<!-- Social Box -->
										<div class="main-footer_socials">
											<span>Follow Us:</span>
											@if(!empty($siteSettings['facebook']))
											<a href="{{ $siteSettings['facebook'] }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
											@endif
											@if(!empty($siteSettings['instagram']))
											<a href="{{ $siteSettings['instagram'] }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
											@endif
											@if(!empty($siteSettings['linkedin']))
											<a href="{{ $siteSettings['linkedin'] }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
											@endif
											@if(!empty($siteSettings['youtube']))
											<a href="{{ $siteSettings['youtube'] }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
											@endif
											@if(!empty($siteSettings['twitter']))
											<a href="{{ $siteSettings['twitter'] }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
											@endif
										</div>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="main-footer_column col-lg-5 col-md-6 col-sm-12">
									<div class="links-widget">
										<h4 class="main-footer_title" style="color:#fff;">Quick Links</h4>
										<ul class="main-footer_links">
											<li><a href="<?= url('/services') ?>">Services</a></li>
											<li><a href="<?= url('/projects') ?>">Projects</a></li>
											<li><a href="<?= url('/faqs') ?>">FAQ's</a></li>
											<li><a href="<?= url('/blogs') ?>">Blogs</a></li>
											<li><a href="<?= url('/gallery') ?>">Gallery</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="links-widget">
										<h4 class="main-footer_title" style="color:#fff;">Useful Links</h4>
										<ul class="main-footer_links">
											<li><a href="<?= url('/about-us') ?>">About Us</a></li>
											<li><a href="<?= url('/book-appointment') ?>">GET A QUOTE</a></li>
											<li><a href="<?= url('/contact-us') ?>">Contact Us</a></li>
											@if(!empty($siteSettings['portfolio_pdf']))
											<li><a href="{{ url('cloud/' . $siteSettings['portfolio_pdf']) }}" target="_blank" download><i class="fa fa-file-pdf"></i> Download Portfolio</a></li>
											@endif
										</ul>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="main-footer_column col-lg-6 col-md-6 col-sm-12">
									<div class="links-widget">
										<h4 class="main-footer_title" style="color:#fff;">Contact Information</h4>
										<div class="main-footer_text" style="color:#fff;">
											<p style="color:#fff;"><strong>ADDRESS:</strong><br>{{ $siteSettings['address'] ?? '' }}</p>
											<p style="color:#fff;"><strong>EMAIL:</strong><br><a href="mailto:{{ $siteSettings['email'] ?? '' }}" style="color:#fff;">{{ $siteSettings['email'] ?? '' }}</a></p>
											<p style="color:#fff;"><strong>OFFICE:</strong><br><a href="tel:{{ $siteSettings['office_phone'] ?? '' }}" style="color:#fff;">{{ $siteSettings['office_phone'] ?? '' }}</a></p>
											@if(!empty($siteSettings['cell_phone']))
											<p style="color:#fff;"><strong>CELL:</strong><br><a href="tel:{{ $siteSettings['cell_phone'] }}" style="color:#fff;">{{ $siteSettings['cell_phone'] }}</a></p>
											@endif
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<div class="main-footer_bottom">
					<div class="d-flex justify-content-between align-items-center flex-wrap">
						<!-- Copyright -->
						<div class="main-footer_copyright" style="color:#fff;">Copyright &copy; <?= date('Y') ?> {{ $siteSettings['copyright'] ?? '' }}</div>
						<ul class="main-footer_navs">
							<li><a href="<?= url('/contact-us') ?>">Support</a></li>
							<li><a href="<?= url('/about-us') ?>">About Us</a></li>
						</ul>
					</div>
				</div>

			</div>
		</footer>
		<!-- End Main Footer -->

		<!-- Search Popup -->
		<div class="search-popup">
			<div class="color-layer"></div>
			<button class="close-search"><span class="fa-xmark"></span></button>
			<form method="get" action="<?= url('/') ?>">
				<div class="form-group">
					<input type="search" name="search" value="" placeholder="Search Here" required="">
					<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
				</div>
			</form>
		</div>
		<!-- End Search Popup -->

		<!-- Color Palate / Color Switcher -->
		<div class="color-palate">
			<div class="color-trigger">
				<i class="fa fa-solid fa-gear fa-fw"></i>
			</div>
			<div class="color-palate-inner">
				<div class="color-palate-head">
					<h6>Choose Options</h6>
				</div>
				<div class="various-color clearfix">
					<div class="colors-list">
						<span class="palate default-color active" data-theme-file="<?= url('assets/css/color-themes/default-color.css') ?>"></span>
						<span class="palate blue-color" data-theme-file="<?= url('assets/css/color-themes/blue-color.css') ?>"></span>
						<span class="palate olive-color" data-theme-file="<?= url('assets/css/color-themes/olive-color.css') ?>"></span>
						<span class="palate orange-color" data-theme-file="<?= url('assets/css/color-themes/orange-color.css') ?>"></span>
						<span class="palate purple-color" data-theme-file="<?= url('assets/css/color-themes/purple-color.css') ?>"></span>
						<span class="palate green-color" data-theme-file="<?= url('assets/css/color-themes/green-color.css') ?>"></span>
						<span class="palate brown-color" data-theme-file="<?= url('assets/css/color-themes/brown-color.css') ?>"></span>
						<span class="palate yellow-color" data-theme-file="<?= url('assets/css/color-themes/yellow-color.css') ?>"></span>
					</div>
				</div>

				<h6>RTL Version</h6>
				<ul class="rtl-version option-box">
					<li class="rtl">RTL Version</li>
					<li>LTR Version</li>
				</ul>
				<h6>Want Sticky Header</h6>
				<ul class="header-version option-box">
					<li class="box">No</li>
					<li>Yes</li>
				</ul>
				<h6>Dark Version</h6>
				<ul class="dark-version option-box">
					<li class="box">Yes</li>
					<li>No</li>
				</ul>
			</div>
		</div>

	</div>
	<!-- End PageWrapper -->

	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>

	<!-- Links of JS File -->
	<script src="<?= url("assets/js/jquery.js") ?>"></script>
	<script src="<?= url("assets/js/popper.min.js") ?>"></script>
	<script src="<?= url("assets/js/bootstrap.min.js") ?>"></script>
	<script src="<?= url("assets/js/appear.js") ?>"></script>
	<script src="<?= url("assets/js/parallax.min.js") ?>"></script>
	<script src="<?= url("assets/js/tilt.jquery.min.js") ?>"></script>
	<script src="<?= url("assets/js/jquery.paroller.min.js") ?>"></script>
	<script src="<?= url("assets/js/wow.js") ?>"></script>
	<script src="<?= url("assets/js/swiper.min.js") ?>"></script>
	<script src="<?= url("assets/js/backtotop.js") ?>"></script>
	<script src="<?= url("assets/js/odometer.js") ?>"></script>
	<script src="<?= url("assets/js/parallax-scroll.js") ?>"></script>

	<script src="<?= url("assets/js/gsap.min.js") ?>"></script>
	<script src="<?= url("assets/js/SplitText.min.js") ?>"></script>
	<script src="<?= url("assets/js/ScrollTrigger.min.js") ?>"></script>
	<script src="<?= url("assets/js/ScrollToPlugin.min.js") ?>"></script>
	<script src="<?= url("assets/js/ScrollSmoother.min.js") ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="<?= url("assets/js/jquery.marquee.min.js") ?>"></script>
	<script src="<?= url("assets/js/validate.js") ?>"></script>
	<script src="<?= url("assets/js/typeit.js") ?>"></script>
	<script src="<?= url("assets/js/magnific-popup.min.js") ?>"></script>
	<script src="<?= url("assets/js/nav-tool.js") ?>"></script>
	<script src="<?= url("assets/js/jquery-ui.js") ?>"></script>
	<script src="<?= url("assets/js/element-in-view.js") ?>"></script>
	<script src="<?= url("assets/js/color-settings.js") ?>"></script>
	<script src="<?= url("assets/js/script.js") ?>"></script>
	<!-- Lightbox JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

</body>

</html>