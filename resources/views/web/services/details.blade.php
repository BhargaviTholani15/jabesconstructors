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

						<!-- Get a Quote Card -->
						<div class="sidebar-widget" style="margin-top:15px;">
							<div style="background:linear-gradient(135deg, #100f86 0%, #2e2db5 100%); border-radius:20px; padding:35px 30px; text-align:center; position:relative; overflow:hidden;">
								<div style="position:absolute; top:0; left:0; right:0; bottom:0; background:url('<?= url('assets/images/background/pattern-2.png') ?>'); opacity:0.05;"></div>
								<div style="position:relative; z-index:1;">
									<div style="width:60px; height:60px; line-height:60px; border-radius:50%; background:rgba(255,255,255,0.15); margin:0 auto 15px; font-size:24px; color:#fff;"><i class="fa-solid fa-phone-volume"></i></div>
									<h4 style="color:#fff; font-size:18px; margin-bottom:8px;">Need Help?</h4>
									<p style="color:rgba(255,255,255,0.7); font-size:14px; margin-bottom:15px;">Talk to our experts</p>
									<a href="tel:{{ $siteSettings['office_phone'] ?? '' }}" style="display:block; font-size:22px; font-weight:800; color:#fff; margin-bottom:20px;">{{ $siteSettings['office_phone'] ?? '' }}</a>
									<a href="<?= url('/book-appointment') ?>" style="display:inline-block; padding:12px 30px; background:#fff; color:#100f86; font-weight:700; border-radius:50px; font-size:14px; transition:all 0.3s;">Get A Quote</a>
								</div>
							</div>
						</div>

						<!-- Why Choose Us -->
						<div class="sidebar-widget" style="margin-top:20px;">
							<div style="background:#f8f8f8; border-radius:20px; padding:30px 25px;">
								<h4 style="font-size:18px; margin-bottom:20px; color:#111;">Why Choose Us</h4>
								<div style="display:flex; align-items:flex-start; gap:12px; margin-bottom:18px;">
									<i class="fa-solid fa-circle-check" style="color:var(--main-color); margin-top:3px;"></i>
									<div><strong style="font-size:14px;">25+ Years Experience</strong><br><span style="font-size:13px; color:#666;">Industry expertise you can trust</span></div>
								</div>
								<div style="display:flex; align-items:flex-start; gap:12px; margin-bottom:18px;">
									<i class="fa-solid fa-circle-check" style="color:var(--main-color); margin-top:3px;"></i>
									<div><strong style="font-size:14px;">Licensed & Insured</strong><br><span style="font-size:13px; color:#666;">Full coverage for peace of mind</span></div>
								</div>
								<div style="display:flex; align-items:flex-start; gap:12px; margin-bottom:18px;">
									<i class="fa-solid fa-circle-check" style="color:var(--main-color); margin-top:3px;"></i>
									<div><strong style="font-size:14px;">On-Time Delivery</strong><br><span style="font-size:13px; color:#666;">Projects completed on schedule</span></div>
								</div>
								<div style="display:flex; align-items:flex-start; gap:12px;">
									<i class="fa-solid fa-circle-check" style="color:var(--main-color); margin-top:3px;"></i>
									<div><strong style="font-size:14px;">2.5M+ Sq. Ft. Delivered</strong><br><span style="font-size:13px; color:#666;">Proven track record across Texas</span></div>
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
							<!-- Service Title -->
							<h2 class="wow fadeInUp" style="color:var(--main-color); font-size:32px; font-weight:800; margin-bottom:25px; position:relative; padding-bottom:15px;">
								{{ $data->service_title }}
								<span style="position:absolute; bottom:0; left:0; width:60px; height:3px; background:var(--main-color); border-radius:2px;"></span>
							</h2>
							<!-- Images side by side -->
							@if(!empty($data->service_image) && !empty($data->inner_image))
							<div class="row clearfix" style="margin-bottom:30px;">
								<div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom:15px;">
									<div class="service-detail_image">
										<img src="{{ url('cloud/' . $data->service_image) }}" alt="{{ $data->service_title }}" style="border-radius:15px; width:100%; height:280px; object-fit:cover;" />
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12" style="margin-bottom:15px;">
									<div class="service-detail_image">
										<img src="{{ url('cloud/' . $data->inner_image) }}" alt="{{ $data->service_title }}" style="border-radius:15px; width:100%; height:280px; object-fit:cover;" />
									</div>
								</div>
							</div>
							@elseif(!empty($data->service_image))
							<div class="service-detail_image" style="margin-bottom:30px;">
								<img src="{{ url('cloud/' . $data->service_image) }}" alt="{{ $data->service_title }}" />
								<div class="service-detail_tag">
									<span>{{ $data->service_title }}</span>
								</div>
							</div>
							@elseif(!empty($data->inner_image))
							<div class="service-detail_image" style="margin-bottom:30px;">
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

	<!-- CTA Section -->
	<section style="padding:70px 0; background:linear-gradient(135deg, #100f86 0%, #2e2db5 100%); text-align:center; position:relative; overflow:hidden;">
		<div style="position:absolute; top:0; left:0; right:0; bottom:0; background:url('<?= url('assets/images/background/pattern-2.png') ?>'); opacity:0.05;"></div>
		<div class="auto-container" style="position:relative; z-index:1;">
			<h3 style="color:#fff; font-size:30px; font-weight:700; margin-bottom:10px;">Ready to Start Your Project?</h3>
			<p style="color:rgba(255,255,255,0.75); font-size:16px; margin-bottom:30px;">Get in touch with EM Building Contractors for a free consultation and quote.</p>
			<div class="d-flex justify-content-center flex-wrap" style="gap:15px;">
				<a href="<?= url('/contact-us') ?>" style="display:inline-flex; align-items:center; gap:8px; padding:14px 35px; background:#fff; color:#100f86; font-size:15px; font-weight:700; border-radius:50px; transition:all 0.4s; border:2px solid #fff;">
					<i class="fa-solid fa-phone"></i> Contact Us
				</a>
				<a href="<?= url('/book-appointment') ?>" style="display:inline-flex; align-items:center; gap:8px; padding:14px 35px; background:transparent; color:#fff; font-size:15px; font-weight:700; border-radius:50px; transition:all 0.4s; border:2px solid rgba(255,255,255,0.5);">
					<i class="fa-solid fa-calendar"></i> Get A Quote
				</a>
			</div>
		</div>
	</section>
	<!-- End CTA Section -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

@endsection
