@extends('web.layouts.app')
@section('content')

<!-- About Sidebar -->
<div class="about-sidebar">
	<div class="gradient-layer"></div>
	<!-- Close Button -->
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
				<div class="text">our clients, oue employees, and our community through our commitmrnt to leadership, excellence in craft, and attention to detail.</div>
				<ul class="about-sidebar_list">
					<li>Testimonials</li>
					<li>Outsourcing</li>
					<li>Privacy Policy</li>
					<li>HR Training</li>
					<li>Careers</li>
				</ul>
			</div>
		</div>
		<!-- Social Box -->
		<div class="social-box">
			<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
			<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
			<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
			<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
		</div>
	</div>
</div>
<!-- End About Sidebar -->

<!-- Page Title -->
<section class="page-title" style="background-image:url(<?= url('assets/images/background/6.jpg') ?>)">
    <div class="auto-container">
		<h2>Our Services</h2>
		<div class="d-flex justify-content-between align-items-center flex-wrap">
			<ul class="bread-crumb clearfix">
				<li><a href="<?= url('/') ?>">Home</a></li>
				<li>Services</li>
			</ul>
			<div class="page-title_text">Whether you're building, remodeling, buying, or selling, we bring seamless project execution under one roof.</div>
		</div>
    </div>
</section>
<!-- End Page Title -->

<!-- Service Three / Style Two -->
<section class="service-three style-two">
	<div class="outer-container" style="background-image:url(<?= url('assets/images/background/service-three_pattern.png') ?>)">
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title">EM Building Contractors</div>
				<h2 class="sec-title_heading">Construction Services <br> To Our Clients</h2>
			</div>

			<div class="row clearfix">
				@php $serviceIcons = ['service-1.svg','service-2.svg','service-3.svg','service-4.svg','service-5.svg','service-6.svg']; @endphp
				@foreach($data as $index => $service)
				<div class="service-block_three col-lg-4 col-md-6 col-sm-12">
					<div class="service-block_three-inner">
						@if(!empty($service->service_image))
						<div class="service-block_three_hover-image" style="background-image:url('{{ url('cloud/' . $service->service_image) }}')"></div>
						@else
						<div class="service-block_three_hover-image" style="background-image:url('{{ url('assets/images/resource/service-2.jpg') }}')"></div>
						@endif
						<div class="service-block_three-pattern" style="background-image:url(<?= url('assets/images/background/service-1_bg.jpg') ?>)"></div>
						<div class="service-block_three-upper">
							<div class="service-block_three-icon">
								<img src="<?= url('assets/images/icons/') ?>/{{ $serviceIcons[$index % count($serviceIcons)] }}" alt="" />
							</div>
							<h4 class="service-block_three-heading"><a href="{{ url('/services/' . $service->slug) }}">{{ $service->service_title }}</a></h4>
						</div>
						<div class="service-block_three-text">{{ Str::limit($service->service_summary, 100) }}</div>
						<a href="{{ url('/services/' . $service->slug) }}" class="service-block_three-more">
							Read More <i class="fa-classic fa-solid fa-arrow-right fa-fw"></i>
						</a>
					</div>
				</div>
				@endforeach
			</div>

		</div>
	</div>
</section>
<!-- End Service Three -->

	@include('web.partials.portfolio-download')

<!-- Program One -->
<section class="service-one">
	<div class="service-one_shadow" style="background-image:url(<?= url('assets/images/background/service-one_shadow.png') ?>)"></div>
	<div class="auto-container">
		<div class="inner-container">
			<div class="service-one_pattern-layer" style="background-image:url(<?= url('assets/images/background/pattern-2.png') ?>)"></div>
			<div class="row clearfix">

				<!-- Content Column -->
				<div class="service-one_content-column col-lg-7 col-md-12 col-sm-12">
					<div class="service-one_content-outer">
						<!-- Sec Title -->
						<div class="sec-title light">
							<div class="sec-title_title">
								EM Building Contractors
							</div>
							<h2 class="sec-title_heading">Construction Services To Our Clients</h2>
						</div>
						<div class="service-one_titles">
							@php $numClasses = ['', 'two', 'three', 'four', 'five', 'six']; @endphp
							@foreach($data as $si => $svc)
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
							@foreach($data as $si => $svc)
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

@include('web.partials.team')

@include('web.partials.marketing-marquee')

@include('web.partials.testimonials')

<!-- Counter One -->
<section class="counter-one">
	<div class="counter-one_pattern" style="background-image:url(<?= url('assets/images/background/pattern-3.png') ?>)"></div>
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Counter One -->
			<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
				<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="counter-block_one-outline"></div>
					<div class="counter-block_one-count"><span class="odometer" data-count="48"></span><sup>+</sup></div>
					<div class="counter-block_one-text">completed <br> projects</div>
				</div>
			</div>

			<!-- Counter One -->
			<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
				<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="counter-block_one-outline"></div>
					<div class="counter-block_one-count"><span class="odometer" data-count="52"></span><sup>+</sup></div>
					<div class="counter-block_one-text">projects in <br> development</div>
				</div>
			</div>

			<!-- Counter One -->
			<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
				<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="counter-block_one-outline"></div>
					<div class="counter-block_one-count"><span class="odometer" data-count="2.3"></span>b<sup>+</sup></div>
					<div class="counter-block_one-text">total projects <br> cost</div>
				</div>
			</div>

			<!-- Counter One -->
			<div class="counter-block_one col-lg-3 col-md-6 col-sm-12">
				<div class="counter-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
					<div class="counter-block_one-outline"></div>
					<div class="counter-block_one-count"><span class="odometer" data-count="18"></span>m<sup>+</sup></div>
					<div class="counter-block_one-text">square feet <br> of property</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- End Counter One -->

<!-- Faq One -->
@php
	$serviceFaqs = \Illuminate\Support\Facades\DB::table('faqs')
		->where('active_flag', 1)
		->orderByDesc('created_at')
		->limit(4)
		->get();
@endphp
<section class="faq-one">
	<div class="faq-one_pattern" style="background-image:url(<?= url('assets/images/background/pattern-4.png') ?>)"></div>
	<div class="auto-container">
		<div class="row clearfix">

			<!-- Image Column -->
			<div class="faq-one_image-column col-lg-5 col-md-6 col-sm-12">
				<div class="faq-one_image">
					<img src="<?= url('assets/images/resource/faq.png') ?>" alt="" />
				</div>
				<div class="faq-one_image" style="margin-top:30px;">
					<img src="<?= url('assets/images/resource/faq-1.png') ?>" alt="" />
				</div>
			</div>

			<!-- Accordian Column -->
			<div class="faq-one_accordian-column col-lg-7 col-md-6 col-sm-12">
				<div class="faq-one_accordian-outer">
					<div class="sec-title">
						<div class="sec-title_title">EM Building Contractors</div>
						<h2 class="sec-title_heading">Frequently Asked Questions</h2>
					</div>
					<ul class="accordion-box">
						@foreach($serviceFaqs as $fi => $faq)
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

@endsection