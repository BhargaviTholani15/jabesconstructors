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
			<h2>{{ $data->service_title }}</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li><a href="<?= url('/services') ?>">Services</a></li>
					<li>{{ $data->service_title }}</li>
				</ul>
				<div class="page-title_text">EM Building Contractors, LLC — Quality craftsmanship and reliable project execution.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container left-sidebar">
    	<div class="auto-container">
        	<div class="row clearfix">

				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">

						<!-- Category Widget -->
						<div class="sidebar-widget category-widget">
							<div class="sidebar-title">
								<h4>Our Services</h4>
							</div>
							<ul class="category-list">
								@foreach($allServices as $service)
								<li class="{{ $service->id == $data->id ? 'active' : '' }}"><a href="{{ url('/services/' . $service->slug) }}">
									<span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span>
									{{ $service->service_title }}</a>
								</li>
								@endforeach
							</ul>
						</div>

						<!-- Rating Widget -->
						<div class="sidebar-widget rating-widget">
							<div class="widget-content" style="background-image:url(<?= url('assets/images/icons/rating-shadow.png') ?>)">
								<div class="rating-widget_rating">4.9</div>
								<div class="rating-widget_authors">
									<ul>
										<li><img src="<?= url('assets/images/main-slider/author-1.png') ?>" alt="" /></li>
										<li><img src="<?= url('assets/images/main-slider/author-2.png') ?>" alt="" /></li>
										<li><img src="<?= url('assets/images/main-slider/author-3.png') ?>" alt="" /></li>
										<li><img src="<?= url('assets/images/main-slider/author-4.png') ?>" alt="" /></li>
									</ul>
									<div class="rating-widget_reviews">
										Our Clients <br> (5k + Reviews)
									</div>
								</div>
								<div class="company-logo">
									<img src="<?= url('assets/images/logo.png') ?>" alt="" style="height:50px; width:auto;" />
								</div>
								<h4 class="rating-widget_phone">Any Questions? Let's talk <a href="tel:{{ $siteSettings['office_phone'] ?? '' }}">{{ $siteSettings['office_phone'] ?? '' }}</a></h4>
								<!-- Button Box -->
								<div class="rating-widget_title-button">
									<a href="<?= url('/contact-us') ?>" class="theme-btn btn-style-one">
										<span class="btn-wrap">
											<span class="text-one">Contact Us <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
											<span class="text-two">Contact Us <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
										</span>
									</a>
								</div>
							</div>
						</div>

					</aside>
				</div>

				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<!-- Service Detail -->
					<div class="service-detail">
						<div class="service-detail_inner">
							@if(!empty($data->service_image))
							<div class="service-detail_image">
								<img src="{{ url('cloud/' . $data->service_image) }}" alt="{{ $data->service_title }}" />
								<div class="service-detail_tag">
									<span>{{ $data->service_title }}</span>
								</div>
							</div>
							@endif

							@if(!empty($data->inner_image))
							<div class="service-detail_image-two" style="margin-bottom:30px;">
								<img src="{{ url('cloud/' . $data->inner_image) }}" alt="{{ $data->service_title }}" />
							</div>
							@endif

							<div class="service-detail_text">
								{!! $data->service_description !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

@endsection
