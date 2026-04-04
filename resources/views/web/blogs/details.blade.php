@extends('web.layouts.app')
@section('title', 'Blog Details')
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
			<h2>Blog Detail</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li><a href="<?= url('/blogs') ?>">Blogs</a></li>
					<li>{{ $data->blog_title }}</li>
				</ul>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
		<div class="page-top_pattern" style="background-image:url(<?= url('assets/images/background/pattern-13.png') ?>)"></div>
    	<div class="auto-container">
        	<div class="row clearfix">

				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="blog-detail">
						<div class="blog-detail_inner">
							<div class="blog-detail_image-outer">
								<div class="blog-detail_date">{{ \Carbon\Carbon::parse($data->created_at)->format('d M') }}</div>
								<div class="news-detail_image">
									@if(!empty($data->blog_image))
									<img src="{{ url('cloud/' . $data->blog_image) }}" alt="{{ $data->blog_title }}" />
									@else
									<img src="<?= url('assets/images/resource/news-9.jpg') ?>" alt="{{ $data->blog_title }}" />
									@endif
								</div>
							</div>
							<div class="blog-detail_content">
								<ul class="blog-detail_meta">
									<li><span class="icon fa-regular fa-comments fa-fw"></span>{{ $data->author ?? 'By Admin' }}</li>
									<li><span class="icon fa-regular fa-calendar fa-fw"></span>{{ \Carbon\Carbon::parse($data->created_at)->format('d M, Y') }}</li>
								</ul>
								<h3 class="blog-detail_title">{{ $data->blog_title }}</h3>

								@if(!empty($data->inner_image))
								<div class="news-detail_image-two" style="margin-bottom:30px;">
									<img src="{{ url('cloud/' . $data->inner_image) }}" alt="{{ $data->blog_title }}" />
								</div>
								@endif

								<div class="blog-detail_text">
									{!! $data->blog_description !!}
								</div>

								<!-- Post Share Options-->
								<div class="post-share-options">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="post-tags"><strong>Author:</strong> {{ $data->author ?? 'Admin' }}</div>
										<div class="social-links">
											<span>Share this post:</span>
											@if(!empty($siteSettings['facebook']))<a href="{{ $siteSettings['facebook'] }}" target="_blank" class="fa-brands fa-facebook-f fa-fw"></a>@endif
											@if(!empty($siteSettings['linkedin']))<a href="{{ $siteSettings['linkedin'] }}" target="_blank" class="fa-brands fa-linkedin-in fa-fw"></a>@endif
											@if(!empty($siteSettings['instagram']))<a href="{{ $siteSettings['instagram'] }}" target="_blank" class="fa-brands fa-instagram fa-fw"></a>@endif
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">

						<!-- Recent Posts Widget -->
						<div class="sidebar-widget post-widget">
							<div class="sidebar-title">
								<h4>Recent Posts</h4>
							</div>
							@php
								$recentBlogs = \Illuminate\Support\Facades\DB::table('blogs')
									->where('active_flag', 1)
									->where('id', '!=', $data->id)
									->orderByDesc('created_at')
									->limit(4)
									->get();
							@endphp
							@foreach($recentBlogs as $recent)
							<div class="post-widget_block">
								<div class="post-widget_image">
									@if(!empty($recent->blog_image))
									<img src="{{ url('cloud/' . $recent->blog_image) }}" alt="" />
									@else
									<img src="{{ url('assets/images/resource/news-1.jpg') }}" alt="" />
									@endif
								</div>
								<div class="post-widget_content">
									<div class="post-widget_date">{{ \Carbon\Carbon::parse($recent->created_at)->format('d M, Y') }}</div>
									<h5 class="post-widget_title"><a href="{{ url('/blogs/' . $recent->slug) }}">{{ Str::limit($recent->blog_title, 50) }}</a></h5>
								</div>
							</div>
							@endforeach
						</div>

						<!-- Services Widget -->
						<div class="sidebar-widget category-widget">
							<div class="sidebar-title">
								<h4>Our Services</h4>
							</div>
							@php
								$sidebarServices = \Illuminate\Support\Facades\DB::table('services')
									->where('active_flag', 1)
									->where('type', 'service')
									->orderByDesc('created_at')
									->get();
							@endphp
							<ul class="category-list">
								@foreach($sidebarServices as $svc)
								<li><a href="{{ url('/services/' . $svc->slug) }}">
									<span class="icon fa-classic fa-solid fa-arrow-right fa-fw"></span>
									{{ $svc->service_title }}</a>
								</li>
								@endforeach
							</ul>
						</div>

					</aside>
				</div>

			</div>
		</div>
	</div>
	<!-- End Sidebar Page Container -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

@endsection