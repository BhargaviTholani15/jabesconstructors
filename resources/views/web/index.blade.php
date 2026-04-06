@extends('web.layouts.app')
@section('title', 'Page Title')
@section('content')

	<!-- About Sidebar -->
	<div class="about-sidebar">
		<div class="gradient-layer"></div>
		<div class="close-sidebar-widget close-button">
			<span class="fa-solid fa-xmark fa-fw"></span>
		</div>
		<div class="sidebar-inner">
			<div class="upper-box">
				<div class="image">
					<img src="<?= url('assets/images/resource/about-1.jpg') ?>" alt="" />
				</div>
				<div class="content-box">
					<h3>About <span>EM Building</span></h3>
					<div class="text">{{ $siteSettings['footer_text'] ?? 'EM Building Contractors, LLC — Quality craftsmanship, innovative solutions, and reliable project execution.' }}</div>
					<ul class="about-sidebar_list">
						<li><a href="<?= url('/services') ?>">Services</a></li>
						<li><a href="<?= url('/projects') ?>">Projects</a></li>
						<li><a href="<?= url('/gallery') ?>">Gallery</a></li>
						<li><a href="<?= url('/faqs') ?>">FAQ's</a></li>
						<li><a href="<?= url('/contact-us') ?>">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div class="social-box">
				@if(!empty($siteSettings['facebook']))<a href="{{ $siteSettings['facebook'] }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>@endif
				@if(!empty($siteSettings['instagram']))<a href="{{ $siteSettings['instagram'] }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>@endif
				@if(!empty($siteSettings['linkedin']))<a href="{{ $siteSettings['linkedin'] }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>@endif
				@if(!empty($siteSettings['youtube']))<a href="{{ $siteSettings['youtube'] }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>@endif
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->

	<!-- Slider One -->
	<section class="slider-one">
		<div class="main-slider swiper-container">
			<div class="swiper-wrapper">
				@foreach($data as $banner)
				@if($banner->active_flag == 1)
				<div class="swiper-slide">
					<div class="slider-one_image-layer" style="background-image:url('{{ url('cloud/' . $banner->image_path) }}')"></div>
					<div class="slider-one_pattern" style="background-image:url(<?= url('assets/images/main-slider/vector-1.png') ?>)"></div>
					<div class="auto-container">
						<div class="slider-one_content">
							<div class="slider-one_content-inner">
								<div class="slider-one_title">EM Building Contractors, LLC</div>
								<h1 class="slider-one_heading">{{ $banner->title }}</h1>
								<div class="slider-one_text">{{ $banner->description }}</div>
								<div class="slider-one_button d-flex align-items-center justify-content-center flex-wrap">
									<a href="<?= url('/about-us') ?>" class="theme-btn btn-style-two">
										<span class="btn-wrap">
											<span class="text-one">Work With Us</span>
											<span class="text-two">Work With Us</span>
										</span>
									</a>
									<div class="slider-one_video">
										<a href="<?= url('/projects') ?>" class="play-box"><span class="fa fa-play"></span></a>
									</div>
								</div>
								<div class="slider-one_arrow" style="background-image:url(<?= url('assets/images/main-slider/vector-2.png') ?>)"></div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="slider-one_pagination"></div>
		</div>

		<!-- Slider One Socials -->
		<div class="slider-one_socials">
			@if(!empty($siteSettings['facebook']))<a href="{{ $siteSettings['facebook'] }}" target="_blank">facebook</a>@endif
			@if(!empty($siteSettings['instagram']))<a href="{{ $siteSettings['instagram'] }}" target="_blank">instagram</a>@endif
			@if(!empty($siteSettings['linkedin']))<a href="{{ $siteSettings['linkedin'] }}" target="_blank">linkedin</a>@endif
		</div>

		<!-- Slider Two Options -->
		<div class="slider-two_options">
			<div class="button">
				<a class="service-btn" href="<?= url('/about-us') ?>">More About Us <i class="fa-arrow-right"></i></a>
			</div>
			@if(isset($testimonials) && count($testimonials) > 0)
			<a href="#testimonial-section" class="slider-two_authors" style="text-decoration:none; cursor:pointer;">
				<ul>
					@foreach($testimonials->take(4) as $t)
					<li>
						@if($t->image_path)
						<img src="{{ url('cloud/' . $t->image_path) }}" alt="{{ $t->name }}" />
						@else
						<img src="<?= url('assets/images/main-slider/author-1.png') ?>" alt="{{ $t->name }}" />
						@endif
					</li>
					@endforeach
				</ul>
				<div class="slider-two_reviews">
					{{ count($testimonials) }}+ <br> <span>Client Reviews</span>
				</div>
			</a>
			@endif
		</div>

	</section>
	<!-- End Main Slider Section -->

	<!-- About One -->
	<section class="about-one">
		<div class="about-one_pattern-layer" style="background-image:url(<?= url('assets/images/background/pattern-1.png') ?>)"></div>
		<div class="about-one_cap" style="background-image:url(<?= url('assets/images/icons/about-cap.png') ?>)"></div>
		<div class="auto-container">
			<div class="sec-title title-anim">
				<div class="sec-title_title">WHO WE ARE</div>
				<h2 class="sec-title_heading">EM Building Contractors, LLC — Building Excellence Since 2018</h2>
			</div>

			<div class="row clearfix">
				<!-- Image Column -->
				<div class="about-one_image-column col-lg-7 col-md-12 col-sm-12">
					<div class="about-one_image-outer">
						<div class="row clearfix">
							<div class="column col-lg-4 col-md-6 col-sm-6">
								<div class="image">
									<img src="<?= url('assets/images/resource/about-2.jpg') ?>" alt="" />
								</div>
								<div class="about-construction_image">
									<img src="<?= url('assets/images/icons/about.png') ?>" alt="" />
								</div>
								<div class="about-one_button">
									<a href="<?= url('/about-us') ?>" class="theme-btn btn-style-three">
										<span class="btn-wrap">
											<span class="text-one">learn more <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
											<span class="text-two">learn more <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
										</span>
									</a>
								</div>
							</div>
							<div class="column col-lg-8 col-md-6 col-sm-6">
								<div class="image">
									<img src="<?= url('assets/images/resource/about-3.jpg') ?>" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Content Column -->
				<div class="about-one_content-column col-lg-5 col-md-12 col-sm-12">
					<div class="about-one_content-outer">
						<div class="feature-block_one">
							<h4 class="feature-block_one-title">Our Story</h4>
							<div class="feature-block_one-text">Founded in 2018 by Erick Mendez with over 25 years of construction experience, EM Building Contractors, LLC has grown into one of the most reliable contracting companies in Texas.</div>
						</div>
						<div class="feature-block_one">
							<h4 class="feature-block_one-title">Our Mission</h4>
							<div class="feature-block_one-text">To provide dependable construction services with attention to detail, timely delivery, and superior quality — building spaces you can rely on for years.</div>
						</div>
						<div class="row clearfix">
							<div class="feature-block_two col-lg-6 col-md-6 col-sm-6">
								<div class="feature-block_two-inner">
									<h4 class="feature-block_two-title">Delivered</h4>
									<div class="feature-block_two-icon">
										<i><img src="<?= url('assets/images/icons/feature-1.svg') ?>" alt="" /></i>
									</div>
									<div class="feature-block_two_count"><span class="odometer" data-count="2"></span>M<sup>+</sup></div>
									<div class="feature-block_two_text">Sq. Ft. of projects</div>
								</div>
							</div>
							<div class="feature-block_two col-lg-6 col-md-6 col-sm-6">
								<div class="feature-block_two-inner">
									<h4 class="feature-block_two-title">Experience</h4>
									<div class="feature-block_two-icon">
										<i><img src="<?= url('assets/images/icons/feature-2.svg') ?>" alt="" /></i>
									</div>
									<div class="feature-block_two_count"><span class="odometer" data-count="25"></span><sup>+</sup></div>
									<div class="feature-block_two_text">years in the industry</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About One -->

	<!-- Program One / Services -->
	<section class="service-one">
		<div class="service-one_shadow" style="background-image:url(<?= url('assets/images/background/service-one_shadow.png') ?>)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<div class="service-one_pattern-layer" style="background-image:url(<?= url('assets/images/background/pattern-2.png') ?>)"></div>
				<div class="row clearfix">
					<!-- Content Column -->
					<div class="service-one_content-column col-lg-7 col-md-12 col-sm-12">
						<div class="service-one_content-outer">
							<div class="sec-title light title-anim">
								<div class="sec-title_title">Our Services</div>
								<h2 class="sec-title_heading">Construction Services To Our Clients</h2>
							</div>
							<div class="service-one_titles">
								@php $numClasses = ['', 'two', 'three', 'four', 'five', 'six']; @endphp
								@foreach($services as $si => $svc)
								<div class="service-one_title {{ $si === 0 ? 'active' : '' }}">
									<h4 class="service-one_heading"><a href="{{ url('/services/' . $svc->slug) }}">{{ $svc->service_title }}</a></h4>
									<a class="service-one_arrow" href="{{ url('/services/' . $svc->slug) }}">
										<i class="fa-classic fa-solid fa-arrow-right fa-fw"></i>
									</a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					<!-- Image Column -->
					<div class="service-one_image-column col-lg-5 col-md-12 col-sm-12">
						<div class="service-one_image-outer">
							<div class="service-one_images_outer">
								@foreach($services as $si => $svc)
								<div class="service-one_image {{ $si === 0 ? 'active' : ($numClasses[$si] ?? '') }}">
									@if(!empty($svc->service_image))
									<img src="{{ url('cloud/' . $svc->service_image) }}" alt="{{ $svc->service_title }}" />
									@else
									<img src="<?= url('assets/images/resource/service.jpg') ?>" alt="{{ $svc->service_title }}" />
									@endif
									<div class="service-one_content">
										<div class="service-one_button">
											<a href="{{ url('/services/' . $svc->slug) }}" class="theme-btn btn-style-three">
												<span class="btn-wrap">
													<span class="text-one">Discover More <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
													<span class="text-two">Discover More <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
												</span>
											</a>
										</div>
										<h3 class="service-one_sub-title">{{ $svc->service_title }}</h3>
										<div class="service-one_text">{{ Str::limit(strip_tags($svc->service_description), 700) }}</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Program One -->

	<!-- Project One -->
	<section class="project-one">
		<div class="auto-container">
			<div class="sec-title title-anim centered">
				<div class="sec-title_title">Our Projects</div>
				<h2 class="sec-title_heading">We Provide Effective <br> Solution in Construction</h2>
			</div>

			<div class="project-style-one-items">

				<!-- Project Block One -->
				<div class="project-block_one">
					<div class="project-block_one-inner">
						<div class="project-block_one-image">
							<img src="<?= url('assets/images/gallery/1.jpg') ?>" alt="" />
							<div class="project-block_one-overlay">
								<div class="project-block_one-overlay_inner" style="background-image:url(<?= url('assets/images/background/project-1.png') ?>)">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="project-block_one-title">Commercial</div>
										<div class="project-block_one-location"><i class="icon"><img src="<?= url('assets/images/icons/location.svg') ?>" alt="" /></i> Garland, Texas</div>
									</div>
									<h3 class="project-block_one-heading"><a href="<?= url('/projects') ?>">Work With <br> Energetic Team</a></h3>
									<div class="project-block_one-text">EM Building Contractors delivers quality construction with attention to detail, timely delivery, and superior craftsmanship.</div>
									<a href="<?= url('/projects') ?>" class="project-block_one-arrow">
										<i class="fa-classic fa-solid fa-arrow-right fa-fw"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block One -->
				<div class="project-block_one style-two">
					<div class="project-block_one-inner">
						<div class="project-block_one-image">
							<img src="<?= url('assets/images/gallery/2.jpg') ?>" alt="" />
							<div class="project-block_one-overlay">
								<div class="project-block_one-overlay_inner" style="background-image:url(<?= url('assets/images/background/project-1.png') ?>)">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="project-block_one-title">Multi-Family</div>
										<div class="project-block_one-location"><i class="icon"><img src="<?= url('assets/images/icons/location.svg') ?>" alt="" /></i> Dallas, Texas</div>
									</div>
									<h3 class="project-block_one-heading"><a href="<?= url('/projects') ?>">Mixed-Use <br> Development</a></h3>
									<div class="project-block_one-text">From residential to commercial projects, we deliver strength, precision, and trust in every structure.</div>
									<a href="<?= url('/projects') ?>" class="project-block_one-arrow">
										<i class="fa-classic fa-solid fa-arrow-right fa-fw"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block One -->
				<div class="project-block_one">
					<div class="project-block_one-inner">
						<div class="project-block_one-image">
							<img src="<?= url('assets/images/gallery/3.jpg') ?>" alt="" />
							<div class="project-block_one-overlay">
								<div class="project-block_one-overlay_inner" style="background-image:url(<?= url('assets/images/background/project-1.png') ?>)">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="project-block_one-title">Residential</div>
										<div class="project-block_one-location"><i class="icon"><img src="<?= url('assets/images/icons/location.svg') ?>" alt="" /></i> Sherman, Texas</div>
									</div>
									<h3 class="project-block_one-heading"><a href="<?= url('/projects') ?>">Premier Office <br> Tower</a></h3>
									<div class="project-block_one-text">Building spaces you can rely on for years with quality craftsmanship and modern design.</div>
									<a href="<?= url('/projects') ?>" class="project-block_one-arrow">
										<i class="fa-classic fa-solid fa-arrow-right fa-fw"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Project Block One -->
				<div class="project-block_one style-two">
					<div class="project-block_one-inner">
						<div class="project-block_one-image">
							<img src="<?= url('assets/images/gallery/4.jpg') ?>" alt="" />
							<div class="project-block_one-overlay">
								<div class="project-block_one-overlay_inner" style="background-image:url(<?= url('assets/images/background/project-1.png') ?>)">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="project-block_one-title">Residential</div>
										<div class="project-block_one-location"><i class="icon"><img src="<?= url('assets/images/icons/location.svg') ?>" alt="" /></i> Austin, Texas</div>
									</div>
									<h3 class="project-block_one-heading"><a href="<?= url('/projects') ?>">Greenview <br> Apartments</a></h3>
									<div class="project-block_one-text">Dependable construction services with attention to detail and superior quality on every project.</div>
									<a href="<?= url('/projects') ?>" class="project-block_one-arrow">
										<i class="fa-classic fa-solid fa-arrow-right fa-fw"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Project One -->

	@include('web.partials.testimonials')

	<!-- Counter One -->
	<section class="counter-one">
		<div class="counter-one_pattern" style="background-image:url(<?= url('assets/images/background/pattern-3.png') ?>)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="counter-block_one-outline"></div>
						<div class="counter-block_one-count"><span class="odometer" data-count="2"></span>M<sup>+</sup></div>
						<div class="counter-block_one-text">sq. ft. <br> delivered</div>
					</div>
				</div>
				<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="counter-block_one-outline"></div>
						<div class="counter-block_one-count"><span class="odometer" data-count="7"></span><sup>+</sup></div>
						<div class="counter-block_one-text">services <br> offered</div>
					</div>
				</div>
				<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="counter-block_one-outline"></div>
						<div class="counter-block_one-count"><span class="odometer" data-count="25"></span><sup>+</sup></div>
						<div class="counter-block_one-text">years of <br> experience</div>
					</div>
				</div>
				<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="counter-block_one-outline"></div>
						<div class="counter-block_one-count"><span class="odometer" data-count="8"></span><sup>+</sup></div>
						<div class="counter-block_one-text">years as <br> company</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter One -->

	<!-- FAQ One -->
	@php
		$homeFaqs = \Illuminate\Support\Facades\DB::table('faqs')
			->where('active_flag', 1)
			->orderByDesc('created_at')
			->limit(4)
			->get();
	@endphp
	<section class="faq-one">
		<div class="faq-one_pattern" style="background-image:url(<?= url('assets/images/background/pattern-4.png') ?>)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<div class="faq-one_image-column col-lg-5 col-md-12 col-sm-12">
					<div class="faq-one_image titlt" data-tilt data-tilt-max="5">
						<img src="<?= url('assets/images/resource/faq.png') ?>" alt="" />
					</div>
					<!-- <div class="faq-one_image" style="margin-top:30px;">
						<img src="<?= url('assets/images/resource/faq-1.png') ?>" alt="" />
					</div> -->
				</div>
				<div class="faq-one_accordian-column col-lg-7 col-md-12 col-sm-12">
					<div class="faq-one_accordian-outer">
						<div class="sec-title title-anim">
							<div class="sec-title_title">EM Building Contractors</div>
							<h2 class="sec-title_heading">Frequently Asked Questions</h2>
						</div>
						<ul class="accordion-box">
							@foreach($homeFaqs as $fi => $faq)
							<li class="accordion block {{ $fi === 0 ? 'active-block' : '' }}">
								<div class="acc-btn {{ $fi === 0 ? 'active' : '' }}"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>{{ $faq->question }}</div>
								<div class="acc-content {{ $fi === 0 ? 'current' : '' }}">
									<div class="content">
										<div class="text">{{ $faq->answer }}</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>

			@include('web.partials.clients-slider')

		</div>
	</section>
	<!-- End Faq One -->

	<!-- Contact One -->
	<section class="contact-one">
		<div class="auto-container">
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-end flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Contact Us</div>
						<h2 class="sec-title_heading">Let's Work Together</h2>
					</div>
					<div class="right-box">
						<div class="sec-title_text">We'd love to discuss your next project. Complete this form and <br> our team will get back to you shortly.</div>
					</div>
				</div>
			</div>

			<div class="row clearfix">
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="row clearfix">
						<div class="info-block_one col-lg-6 col-md-6 col-sm-6">
							<div class="info-block_one-inner">
								<div class="info-block_one-icon fa-classic fa-solid fa-phone fa-fw"></div>
								<strong>Call Us</strong>
								{{ $siteSettings['office_phone'] ?? '' }}
							</div>
						</div>
						<div class="info-block_one col-lg-6 col-md-6 col-sm-6">
							<div class="info-block_one-inner">
								<div class="info-block_one-icon fa-classic fa-solid fa-envelope fa-fw"></div>
								<strong>Email Us</strong>
								{{ $siteSettings['email'] ?? '' }}
							</div>
						</div>
						<div class="info-block_one col-lg-6 col-md-6 col-sm-6">
							<div class="info-block_one-inner">
								<div class="info-block_one-icon fa-classic fa-solid fa-clock fa-fw"></div>
								<strong>Working Hours</strong>
								{{ $siteSettings['working_hours'] ?? '' }}
							</div>
						</div>
						<div class="info-block_one col-lg-6 col-md-6 col-sm-6">
							<div class="info-block_one-inner">
								<div class="info-block_one-icon fa-classic fa-solid fa-map fa-fw"></div>
								<strong>Location</strong>
								Garland, Texas
							</div>
						</div>
					</div>
				</div>
				<div class="column col-lg-6 col-md-12 col-sm-12">
					<div class="contact-form">
						<form method="post" action="<?= url('/contact-us') ?>" id="contact-form">
							@csrf
							<div class="row clearfix">
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="name" placeholder="Your Name" required>
								</div>
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="phone" placeholder="Phone Number" required>
								</div>
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="email" name="email" placeholder="Email Address" required>
								</div>
								<div class="form-group col-lg-6 col-md-6 col-sm-12">
									<input type="text" name="subject" placeholder="Subject" required>
								</div>
								<div class="form-group col-lg-12 col-md-12 col-sm-12">
									<textarea name="message" placeholder="Your Message"></textarea>
								</div>
								<div class="form-group">
									<div class="d-flex justify-content-between align-items-end flex-wrap">
										<div class="contact-form_text">Ready to start your project? <br> Get in touch today.</div>
										<button class="theme-btn btn-style-three" type="submit">
											<span class="btn-wrap">
												<span class="text-one">Contact Now <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
												<span class="text-two">Contact Now <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
											</span>
										</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact One -->

	@include('web.partials.marketing-marquee')

	<!-- News One / Blogs -->
	@if(count($blogs) > 0)
	<section class="news-one">
		<div class="auto-container">
			<div class="sec-title">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="sec-title_title">Our Blog & News</div>
						<h2 class="sec-title_heading">Latest News Posts <br> And Articles</h2>
					</div>
					<div class="news-one_button">
						<a href="<?= url('/blogs') ?>" class="theme-btn btn-style-three">
							<span class="btn-wrap">
								<span class="text-one">View All Posts <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
								<span class="text-two">View All Posts <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
							</span>
						</a>
					</div>
				</div>
			</div>

			<div class="row clearfix">
				@foreach($blogs as $blog)
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image_outer">
							<div class="news-block_one-date">{{ date('d M', strtotime($blog->created_at)) }}</div>
							<div class="news-block_one-image">
								@if(!empty($blog->blog_image))
								<a href="{{ url('/blogs/' . $blog->slug) }}"><img src="{{ url('cloud/' . $blog->blog_image) }}" alt="{{ $blog->blog_title }}" /></a>
								<img src="{{ url('cloud/' . $blog->blog_image) }}" alt="{{ $blog->blog_title }}" />
								@else
								<a href="{{ url('/blogs/' . $blog->slug) }}"><img src="<?= url('assets/images/resource/news-1.jpg') ?>" alt="{{ $blog->blog_title }}" /></a>
								<img src="<?= url('assets/images/resource/news-1.jpg') ?>" alt="{{ $blog->blog_title }}" />
								@endif
							</div>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-regular fa-comments fa-fw"></span>{{ $blog->author ?? 'By Admin' }}</li>
							</ul>
							<h4 class="news-block_one-title"><a href="{{ url('/blogs/' . $blog->slug) }}">{{ $blog->blog_title }}</a></h4>
							<div class="news-block_one-button">
								<a class="news-block_one-more" href="{{ url('/blogs/' . $blog->slug) }}">READ MORE</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	@endif
	<!-- End News One -->

	@if(session('message'))
	<script>
		Swal.fire({
			icon: 'success',
			title: 'Thank You!',
			text: '{{ session("message") }}',
			confirmButtonColor: '#100f86'
		});
	</script>
	@endif

@endsection