@extends('web.layouts.app')
@section('title', 'Page Title')
@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url(<?= url('assets/images/background/6.jpg') ?>)">
	<div class="auto-container">
		<h2>Hospital Details</h2>
		<div class="d-flex justify-content-between align-items-center flex-wrap">
			<ul class="bread-crumb clearfix">
				<li><a href="<?= url('/') ?>">Home</a></li>
				<li><a href="<?= url('/hospitals') ?>">Hospitals</a></li>
				<li>Hospital Details</li>
			</ul>
		</div>
	</div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="content-side col-lg-8 col-md-12 col-sm-12">
				<div class="service-detail">
					<div class="service-detail_content">
						<h2>Facilities</h2>
						<div class="service-detail_text">
							<p>Anu Hospitals is equipped with state-of-the-art facilities to provide comprehensive healthcare services. Our dedicated team ensures that patients receive the highest quality of care in a comfortable environment. From advanced diagnostic equipment to modern treatment options, we prioritize patient safety and satisfaction.</p>
							<p>Our hospital features spacious patient rooms, a well-equipped pharmacy, and a range of specialized clinics. We believe in delivering personalized care that meets the unique needs of each patient.</p>
						</div>

						<h3>Labour Room</h3>
						<div class="service-detail_text">
							<p>At Anu Hospitals, we have a dedicated labour room designed to provide a safe and comfortable environment for expectant mothers. Our experienced obstetricians and nursing staff are available 24/7.</p>
						</div>

						<h3>Operation Theatre</h3>
						<div class="service-detail_text">
							<p>Our operation theatre is equipped with the latest technology and adheres to strict safety protocols. Highly skilled surgeons perform various procedures, ensuring the best possible outcomes.</p>
						</div>

						<h3>Telemedicine</h3>
						<div class="service-detail_text">
							<p>We offer telemedicine services to make healthcare accessible to everyone. Patients can consult with our specialists remotely, receive medical advice, and follow-up care.</p>
						</div>

						<h3>Pharmacy</h3>
						<div class="service-detail_text">
							<p>Anu Hospitals has an in-house pharmacy that provides a wide range of medications and healthcare products.</p>
						</div>

						<h3>Clinics</h3>
						<div class="service-detail_text">
							<ul class="list-style-two">
								<li>General Medicine</li>
								<li>Orthopedics</li>
								<li>Pediatrics</li>
								<li>Dentistry</li>
								<li>Gynecology</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
				<aside class="sidebar">
					<div class="sidebar-widget">
						<div class="project-block_inner">
							<div class="project-block_image">
								<img src="<?= url('/assets/images/resource/anu.png') ?>" alt="Anu Hospital" style="width: 100%;">
							</div>
							<div class="project-block_content">
								<h4>Anu Hospitals</h4>
								<div class="project-block_text">
									<strong>Address:</strong> # 33-18-1, Chalasani Venkatakrishnaiah Street, Near Puspa Hotel, Suryaraopeta, Vijayawada, Andhra Pradesh 520002<br><br>
									<strong>Phone:</strong> <a href="tel:1800 4199 888">1800 4199 888</a>
								</div>
								<a href="<?= url('/book-appointment') ?>" class="theme-btn btn-style-one">
									<span class="btn-wrap">
										<span class="text-one">Book Appointment</span>
										<span class="text-two">Book Appointment</span>
									</span>
								</a>
							</div>
						</div>
					</div>

					<div class="sidebar-widget">
						<h4>Our Location</h4>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3800.6841390081113!2d83.31138237578415!3d17.712375293360353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3943c9cb873ac7%3A0x6722b5522f441b9f!2sAnu%20Institute%20of%20Neuro%20and%20Cardiac%20Sciences%7C%20Best%20Multispecialty%20Hospitals%20in%20Vizag!5e0!3m2!1sen!2sin!4v1727446528947!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>
<!-- End Sidebar Page Container -->

@endsection