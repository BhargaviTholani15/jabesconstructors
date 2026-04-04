@extends('web.layouts.app')
@section('title', 'Blog')
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
			<h2>Our Blogs</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li>Our Blogs</li>
				</ul>
				<div class="page-title_text">Stay updated with the latest insights, tips, and news from EM Building Contractors.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- News One -->
	<section class="news-one style-two">
		<div class="auto-container">
			<div class="row clearfix">

				@forelse($data as $blog)
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12">
					<div class="news-block_one-inner">
						<div class="news-block_one-image_outer">
							<div class="news-block_one-date">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M') }}</div>
							<div class="news-block_one-image">
								@if(!empty($blog->blog_image))
								<a href="{{ url('/blogs/' . $blog->slug) }}"><img src="{{ url('cloud/' . $blog->blog_image) }}" alt="{{ $blog->blog_title }}" /></a>
								<img src="{{ url('cloud/' . $blog->blog_image) }}" alt="{{ $blog->blog_title }}" />
								@else
								<a href="{{ url('/blogs/' . $blog->slug) }}"><img src="{{ url('assets/images/resource/news-1.jpg') }}" alt="{{ $blog->blog_title }}" /></a>
								<img src="{{ url('assets/images/resource/news-1.jpg') }}" alt="{{ $blog->blog_title }}" />
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
				@empty
				<div class="col-lg-12 text-center">
					<p>No blog posts available at the moment.</p>
				</div>
				@endforelse

			</div>
		</div>
	</section>
	<!-- End News One -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

@endsection