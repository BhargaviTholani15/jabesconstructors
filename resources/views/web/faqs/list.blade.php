@extends('web.layouts.app')
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
					<div class="text">EM Building Contractors, LLC — Quality craftsmanship, innovative solutions, and reliable project execution.</div>
					<ul class="about-sidebar_list">
						<li>Services</li>
						<li>Projects</li>
						<li>Gallery</li>
						<li>Contact Us</li>
					</ul>
				</div>
			</div>
			<div class="social-box">
				@if(!empty($siteSettings['facebook']))<a href="{{ $siteSettings['facebook'] }}"><i class="fa-brands fa-facebook-f"></i></a>@endif
				@if(!empty($siteSettings['instagram']))<a href="{{ $siteSettings['instagram'] }}"><i class="fa-brands fa-instagram"></i></a>@endif
				@if(!empty($siteSettings['linkedin']))<a href="{{ $siteSettings['linkedin'] }}"><i class="fa-brands fa-linkedin-in"></i></a>@endif
				@if(!empty($siteSettings['youtube']))<a href="{{ $siteSettings['youtube'] }}"><i class="fa-brands fa-youtube"></i></a>@endif
			</div>
		</div>
	</div>
	<!-- End About Sidebar -->

	<!-- Page Title -->
    <section class="page-title" style="background-image:url(<?= url('assets/images/background/6.jpg') ?>)">
        <div class="auto-container">
			<h2>FAQ's</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li>FAQ's</li>
				</ul>
				<div class="page-title_text">Find answers to the most commonly asked questions about our construction services.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Faq One -->
	<section class="faq-one style-two" style="background-image:url(<?= url('assets/images/background/pattern-13.png') ?>)">
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
						<!-- Sec Title -->
						<div class="sec-title title-anim">
							<div class="sec-title_title">
								EM Building Contractors
							</div>
							<h2 class="sec-title_heading">Frequently Asked Questions</h2>
						</div>

						<!-- Accordion Box -->
						<ul class="accordion-box style-two">

							@forelse($faqs as $index => $faq)
							<li class="accordion block {{ $index === 0 ? 'active-block' : '' }}">
								<div class="acc-btn {{ $index === 0 ? 'active' : '' }}"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>{{ $faq->question }}</div>
								<div class="acc-content {{ $index === 0 ? 'current' : '' }}">
									<div class="content">
										<div class="text">{{ $faq->answer }}</div>
									</div>
								</div>
							</li>
							@empty
							<li class="accordion block">
								<div class="acc-btn"><div class="icon-outer"><span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span></div>No FAQ's available at the moment.</div>
							</li>
							@endforelse

						</ul>

					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Faq One -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

@endsection