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

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?= url('assets/images/background/6.jpg') ?>)">
        <div class="auto-container">
			<h2>About Us</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li>About Us</li>
				</ul>
				<div class="page-title_text">Whether you're building, remodeling, or renovating, we bring seamless project execution under one roof.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- About One -->
	<section class="about-one">
		<div class="about-one_pattern-layer" style="background-image:url(<?= url('assets/images/background/pattern-1.png') ?>)"></div>
		<div class="about-one_cap" style="background-image:url(<?= url('assets/images/icons/about-cap.png') ?>)"></div>
		<div class="auto-container">
			<div class="sec-title title-anim">
				<div class="sec-title_title">WHO WE ARE</div>
				<h2 class="sec-title_heading">EM Building Contractors, LLC — Building Excellence Since 2011</h2>
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
									<a href="<?= url('/contact-us') ?>" class="theme-btn btn-style-three">
										<span class="btn-wrap">
											<span class="text-one">Contact Us <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
											<span class="text-two">Contact Us <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
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
							<div class="feature-block_one-text">EM Building Contractors, LLC is the brainchild of Erick Mendez, who has been in the construction industry for over 25 years. Founded in 2011, the company has grown into one of the most reliable contracting firms in Texas with a long history of satisfied clients.</div>
						</div>
						<div class="feature-block_one">
							<h4 class="feature-block_one-title">Our Mission</h4>
							<div class="feature-block_one-text">To provide dependable construction services with attention to detail, timely delivery, and superior quality — building spaces you can rely on for years. We are always looking to grow and are open to potential partnerships.</div>
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

	<!-- CEO Section -->
	<section class="ceo-section" style="padding:100px 0; background:#111;">
		<div class="auto-container">
			<div class="row clearfix align-items-center">
				<!-- Left Content -->
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div style="padding-right:40px;">
						<div class="sec-title">
							<div class="sec-title_title" style="color:var(--main-color);">Meet Our Founder</div>
							<h2 class="sec-title_heading" style="color:#fff;">Erick Mendez</h2>
							<div style="color:var(--main-color); font-size:18px; font-weight:600; margin-bottom:20px;">CEO & Founder</div>
						</div>
						<p style="color:rgba(255,255,255,0.8); font-size:16px; line-height:30px; margin-bottom:20px;">This company is the brainchild of Erick Mendez, who has been in the construction industry for over 25 years now. He has been a major part of many successful projects, from residential and commercial to industrial and public works. The team is dedicated to providing quality work and services, which is why they have a long history of satisfied clients.</p>
						<p style="color:rgba(255,255,255,0.8); font-size:16px; line-height:30px; margin-bottom:20px;">Before starting his own company, Erick worked on numerous construction projects and gained experience in Project Management for more than 25 years. The company was started in 2011. Since then, it has continued to grow and evolve into one of the most reliable contracting companies.</p>
						<p style="color:rgba(255,255,255,0.8); font-size:16px; line-height:30px; margin-bottom:30px;">They are always looking to grow in the field and are open to potential partnerships. If you have a project in mind, contact them to see how they can help bring your idea to life.</p>
						<div class="d-flex align-items-center flex-wrap" style="gap:20px;">
							<a href="<?= url('/contact-us') ?>" class="theme-btn btn-style-one">
								<span class="btn-wrap">
									<span class="text-one">Get In Touch</span>
									<span class="text-two">Get In Touch</span>
								</span>
							</a>
							<div class="d-flex" style="gap:12px;">
								@if(!empty($siteSettings['facebook']))<a href="{{ $siteSettings['facebook'] }}" target="_blank" style="width:40px; height:40px; line-height:40px; text-align:center; border:1px solid rgba(255,255,255,0.3); border-radius:50%; color:#fff; font-size:14px;"><i class="fa-brands fa-facebook-f"></i></a>@endif
								@if(!empty($siteSettings['instagram']))<a href="{{ $siteSettings['instagram'] }}" target="_blank" style="width:40px; height:40px; line-height:40px; text-align:center; border:1px solid rgba(255,255,255,0.3); border-radius:50%; color:#fff; font-size:14px;"><i class="fa-brands fa-instagram"></i></a>@endif
								@if(!empty($siteSettings['linkedin']))<a href="{{ $siteSettings['linkedin'] }}" target="_blank" style="width:40px; height:40px; line-height:40px; text-align:center; border:1px solid rgba(255,255,255,0.3); border-radius:50%; color:#fff; font-size:14px;"><i class="fa-brands fa-linkedin-in"></i></a>@endif
								@if(!empty($siteSettings['youtube']))<a href="{{ $siteSettings['youtube'] }}" target="_blank" style="width:40px; height:40px; line-height:40px; text-align:center; border:1px solid rgba(255,255,255,0.3); border-radius:50%; color:#fff; font-size:14px;"><i class="fa-brands fa-youtube"></i></a>@endif
							</div>
						</div>
					</div>
				</div>
				<!-- Right Image -->
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div style="position:relative;">
						<img src="<?= url('assets/images/resource/ceo.jpg') ?>" alt="Erick Mendez - CEO" style="width:100%; border-radius:20px; box-shadow:0 20px 60px rgba(0,0,0,0.3);" />
						<div style="position:absolute; bottom:-20px; left:-20px; background:var(--main-color); color:#fff; padding:20px 30px; border-radius:10px; font-weight:700; font-size:18px;">
							25+ Years <br><span style="font-weight:400; font-size:14px;">of Experience</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End CEO Section -->

	<!-- Customer One / What We Build -->
	@php
		$aboutServices = \Illuminate\Support\Facades\DB::table('services')
			->where('active_flag', 1)
			->where('type', 'service')
			->orderByDesc('created_at')
			->limit(3)
			->get();
		$serviceIcons = ['customer-1.svg', 'customer-2.svg', 'customer-3.svg'];
	@endphp
	<section class="customer-one">
		<div class="auto-container">
			<div class="customer-one_bg">
				<div class="customer-one_pattern" style="background-image:url(<?= url('assets/images/background/pattern-1.png') ?>)"></div>
			</div>
			<div class="inner-container">
				<div class="sec-title centered">
					<div class="sec-title_title">Our Expertise Areas</div>
					<h2 class="sec-title_heading">What We Build for <br> Our Clients</h2>
				</div>
				<div class="row clearfix">
					@foreach($aboutServices as $asi => $asvc)
					<div class="customer-block_one col-lg-4 col-md-6 col-sm-12">
						<div class="customer-block_one-inner wow fadeInUp" data-wow-delay="{{ $asi * 200 }}ms" data-wow-duration="1500ms">
							<div class="customer-block_one-bg" style="background-image:url('{{ !empty($asvc->service_image) ? url('cloud/' . $asvc->service_image) : url('assets/images/background/choose-one_bg.jpg') }}')"></div>
							<div class="customer-block_one-number">0{{ $asi + 1 }}</div>
							<div class="customer-block_one-icon">
								<img src="<?= url('assets/images/icons/') ?>/{{ $serviceIcons[$asi] ?? 'customer-1.svg' }}" alt="" />
							</div>
							<h3 class="customer-block_one-title"><a href="{{ url('/services/' . $asvc->slug) }}">{{ $asvc->service_title }}</a></h3>
							<div class="customer-block_one-text">{{ Str::limit($asvc->service_summary, 120) }}</div>
							<a class="customer-block_one-more" href="{{ url('/services/' . $asvc->slug) }}">Read More <i class="fa-classic fa-solid fa-plus fa-fw"></i></a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End Customer One -->

	<!-- About Three -->
	<section class="about-three">
		<div class="about-three_big-title">about</div>
		<div class="about-three_pattern" style="background-image:url(<?= url('assets/images/background/about-three_pattern.png') ?>)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Content Column -->
				<div class="about-three_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-three_content-outer">
						<div class="sec-title title-anim">
							<div class="sec-title_title">OUR JOURNEY</div>
							<h2 class="sec-title_heading">Journey of EM Building Contractors</h2>
							<div class="sec-title_text">Before starting his own company, Erick Mendez worked on numerous construction projects and gained experience in Project Management for more than 25 years. The company was started in 2011 and has continued to grow into one of the most reliable contracting companies in Texas.</div>
						</div>
						<ul class="about-three_list">
							<li><i class="fa-classic fa-solid fa-circle-check fa-fw"></i>Delivered 2 Million+ Sq. Ft. of Projects</li>
							<li><i class="fa-classic fa-solid fa-circle-check fa-fw"></i>25+ Years of Experience — Gaining Goodwill Amongst Clients</li>
							<li><i class="fa-classic fa-solid fa-circle-check fa-fw"></i>Completed Wide Range of Commercial, Residential & Multi-Family Projects</li>
						</ul>
						<div class="about-three_info">
							<div class="d-flex justify-content-between align-items-center flex-wrap">
								<div class="about-three_text">Our team of exceptional professionals are strong, experienced, and committed to excellence. From experienced staff to high quality materials, we are committed to excellence in every construction project.</div>
							</div>
						</div>
						<div class="lower-box d-flex align-items-center flex-wrap">
							<div class="about-three_button">
								<a href="<?= url('/services') ?>" class="theme-btn btn-style-three">
									<span class="btn-wrap">
										<span class="text-one">Our Services <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
										<span class="text-two">Our Services <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
									</span>
								</a>
							</div>
							<div class="about-three_phone">
								<div class="about-three_phone-inner">
									<span class="about-three_phone-icon fa-classic fa-solid fa-phone fa-fw"></span>
									Call Us 24/7 <br>
									<a href="tel:{{ $siteSettings['office_phone'] ?? '' }}">{{ $siteSettings['office_phone'] ?? '' }}</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Image Column -->
				<div class="about-three_images-column col-lg-6 col-md-12 col-sm-12">
					<div class="about-three_images-outer">
						<div class="about-three_image">
							<img src="<?= url('assets/images/resource/about-5.jpg') ?>" alt="" />
						</div>
						<div class="about-three_image-two">
							<img src="<?= url('assets/images/resource/about-6.jpg') ?>" alt="" />
						</div>
						<div class="about-three_image-three">
							<img src="<?= url('assets/images/resource/about-7.jpg') ?>" alt="" />
						</div>
						<div class="about-three_award">
							<span><img src="<?= url('assets/images/icons/award.svg') ?>" alt="" /></span>
							Since 2011 <br> Trusted in Texas
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Three -->

	<!-- Counter Three -->
	<section class="counter-three">
		<div class="counter-three_pattern" style="background-image:url(<?= url('assets/images/background/pattern-4.png') ?>)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<div class="counter-block_three col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_three-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="counter-block_three-count"><span class="odometer" data-count="2"></span>M+</div>
						<h4 class="counter-block_three-title">Sq. Ft. Delivered</h4>
						<div class="counter-block_three-text">Successful project delivery across Texas.</div>
					</div>
				</div>
				<div class="counter-block_three col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_three-inner wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
						<div class="counter-block_three-count"><span class="odometer" data-count="25"></span>+</div>
						<h4 class="counter-block_three-title">Years Experience</h4>
						<div class="counter-block_three-text">Gaining goodwill amongst our clients since day one.</div>
					</div>
				</div>
				<div class="counter-block_three col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_three-inner wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="counter-block_three-count"><span class="odometer" data-count="98"></span>%</div>
						<h4 class="counter-block_three-title">Client Satisfaction</h4>
						<div class="counter-block_three-text">Our clients trust us for consistent quality and reliability.</div>
					</div>
				</div>
				<div class="counter-block_three col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_three-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="counter-block_three-count"><span class="odometer" data-count="14"></span>+</div>
						<h4 class="counter-block_three-title">Years as Company</h4>
						<div class="counter-block_three-text">Founded in 2011, growing stronger every year.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter Three -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.team')

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
					<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
						<div class="counter-block_one-outline"></div>
						<div class="counter-block_one-count"><span class="odometer" data-count="7"></span><sup>+</sup></div>
						<div class="counter-block_one-text">services <br> offered</div>
					</div>
				</div>
				<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
						<div class="counter-block_one-outline"></div>
						<div class="counter-block_one-count"><span class="odometer" data-count="25"></span><sup>+</sup></div>
						<div class="counter-block_one-text">years of <br> experience</div>
					</div>
				</div>
				<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
					<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="counter-block_one-outline"></div>
						<div class="counter-block_one-count"><span class="odometer" data-count="14"></span><sup>+</sup></div>
						<div class="counter-block_one-text">years as <br> company</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Counter One -->

	<!-- Faq One -->
	@php
		$aboutFaqs = \Illuminate\Support\Facades\DB::table('faqs')
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
						<img src="<?= url('assets/images/resource/faq.png') ?>" alt="" style="height:auto;width:100%;"/>
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
							@foreach($aboutFaqs as $fi => $faq)
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
						<div class="sec-title_text">Ready to start your next construction project? <br> Get in touch and our team will respond promptly.</div>
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