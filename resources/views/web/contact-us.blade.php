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
					<div class="text">{{ $siteSettings['footer_text'] ?? '' }}</div>
					<ul class="about-sidebar_list">
						<li><a href="<?= url('/services') ?>">Services</a></li>
						<li><a href="<?= url('/projects') ?>">Projects</a></li>
						<li><a href="<?= url('/gallery') ?>">Gallery</a></li>
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
			<h2>Contact Us</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li>Contact Us</li>
				</ul>
				<div class="page-title_text">Have a question or ready to start your project? Get in touch with EM Building Contractors today.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Contact Three -->
	<section class="contact-three" id="contact">
		<div class="page-top_pattern" style="background-image:url(<?= url('assets/images/background/pattern-13.png') ?>)"></div>
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Form Column -->
				<div class="contact-three_form-column col-lg-7 col-md-6 col-sm-12">
					<div class="contact-three_form-outer">
						<div class="sec-title">
							<div class="sec-title_title">Keep In Touch</div>
							<h3 class="sec-title_heading">Send Us a Message</h3>
						</div>

						<div class="contact-form">
							<form method="post" action="<?= url('/contact-us') ?>" id="contact-form">
								@csrf
								<div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="name" placeholder="Your Name *" required value="{{ old('name') }}">
										@error('name')<span style="color:red; font-size:13px;">{{ $message }}</span>@enderror
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="phone" placeholder="Phone Number *" required value="{{ old('phone') }}">
										@error('phone')<span style="color:red; font-size:13px;">{{ $message }}</span>@enderror
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
									</div>
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="subject" placeholder="Subject" value="{{ old('subject') }}">
									</div>
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Your Message">{{ old('message') }}</textarea>
									</div>
									<div class="form-group">
										<div class="d-flex justify-content-between align-items-end flex-wrap">
											<div class="contact-form_text">We're excited to hear from you! <br> Fields marked * are required.</div>
											<button class="theme-btn btn-style-three" type="submit">
												<span class="btn-wrap">
													<span class="text-one">Send Message <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
													<span class="text-two">Send Message <i><img src="<?= url('assets/images/icons/arrow-1.svg') ?>" alt="" /></i></span>
												</span>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- Info Column -->
				<div class="contact-three_info-column col-lg-5 col-md-6 col-sm-12">
					<div class="contact-three_info-outer">
						<h3>Contact <br> Information</h3>
						<div class="contact-info_text">We'd love to hear from you. Reach out to us <br> for any queries or project discussions.</div>

						<style>
							.contact-info_inline { display:flex; align-items:flex-start; gap:15px; margin-bottom:20px; }
							.contact-info_inline .contact-info_block-icon { flex-shrink:0; margin:0; }
							.contact-info_inline .contact-info_content h4 { margin:0 0 5px; color:var(--black-color); }
							.contact-info_inline .contact-info_content p { margin:0; }
						</style>

						<div class="contact-info_inline">
							<div class="contact-info_block-icon">
								<i class="fa-classic fa-solid fa-location-dot fa-fw"></i>
							</div>
							<div class="contact-info_content">
								<h4>Location</h4>
								<p>{{ $siteSettings['address'] ?? '' }}</p>
							</div>
						</div>

						<div class="contact-info_inline">
							<div class="contact-info_block-icon">
								<i class="fa-classic fa-solid fa-phone fa-fw"></i>
							</div>
							<div class="contact-info_content">
								<h4>Phone</h4>
								<p>Office: <a href="tel:{{ $siteSettings['office_phone'] ?? '' }}">{{ $siteSettings['office_phone'] ?? '' }}</a><br>
								Cell: <a href="tel:{{ $siteSettings['cell_phone'] ?? '' }}">{{ $siteSettings['cell_phone'] ?? '' }}</a></p>
							</div>
						</div>

						<div class="contact-info_inline">
							<div class="contact-info_block-icon">
								<i class="fa-classic fa-solid fa-envelope fa-fw"></i>
							</div>
							<div class="contact-info_content">
								<h4>Email</h4>
								<p><a href="mailto:{{ $siteSettings['email'] ?? '' }}">{{ $siteSettings['email'] ?? '' }}</a></p>
							</div>
						</div>

						<div class="contact-info_inline">
							<div class="contact-info_block-icon">
								<i class="fa-classic fa-solid fa-clock fa-fw"></i>
							</div>
							<div class="contact-info_content">
								<h4>Working Hours</h4>
								<p>{{ $siteSettings['working_hours'] ?? '' }}</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Contact Three -->

	<!-- Map One -->
	<section class="map-one">
		<div class="auto-container">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3184.361817105505!2d-96.66943572453494!3d32.89491297361459!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864ea0ac648fffff%3A0x7d2b2a537c892b22!2s1919%20S%20Shiloh%20Rd%20Ste%20230%2C%20Garland%2C%20TX%2075042%2C%20USA!5e1!3m2!1sen!2sin!4v1775133189924!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
	<!-- End Map One -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

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