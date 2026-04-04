@extends('web.layouts.app')
@section('title', 'Page Title')
@section('content')

<!-- Page Title -->
<section class="page-title" style="background-image:url(<?= url('assets/images/background/6.jpg') ?>)">
	<div class="auto-container">
		<h2>Hospitals</h2>
		<div class="d-flex justify-content-between align-items-center flex-wrap">
			<ul class="bread-crumb clearfix">
				<li><a href="<?= url('/') ?>">Home</a></li>
				<li>Hospitals</li>
			</ul>
			<div class="page-title_text">Hospital, Urgent Care, and Other Health Facility Locations.</div>
		</div>
	</div>
</section>
<!-- End Page Title -->

<!-- Projects One -->
<section class="projects-one">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="project-block col-lg-4 col-md-6 col-sm-12">
				<div class="project-block_inner wow fadeInUp">
					<div class="project-block_image">
						<a href="<?= url('/') ?>">
							<img src="<?= url('/assets/images/resource/anu.png') ?>" alt="Anu Hospital" style="height:300px; width:100%; object-fit:cover;">
						</a>
					</div>
					<div class="project-block_content">
						<h4 class="project-block_title"><a href="<?= url('/') ?>">Anu Hospitals</a></h4>
						<div class="project-block_text">
							<strong>Address:</strong> 1234 Health St, City, State, Zip<br>
							<strong>Phone:</strong> <a href="tel:-(616)-999-95540">(616) 999-95540</a>
						</div>
						<a href="<?= url('/hospitals/hospital-details') ?>" class="theme-btn btn-style-one">
							<span class="btn-wrap">
								<span class="text-one">View Details</span>
								<span class="text-two">View Details</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Projects One -->

@endsection