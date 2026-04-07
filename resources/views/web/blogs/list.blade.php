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

			<!-- Category Filter -->
			@if(isset($blogCategories) && count($blogCategories) > 0)
			<div class="d-flex justify-content-center flex-wrap" style="gap:8px; margin-bottom:40px;">
				<a href="{{ url('/blogs') }}" style="display:inline-block; padding:8px 22px; border-radius:50px; font-size:13px; font-weight:600; transition:all 0.3s; {{ empty($activeCategory) ? 'background:var(--main-color); color:#fff;' : 'background:#f0f0f0; color:#333;' }}">All</a>
				@foreach($blogCategories as $bc)
				<a href="{{ url('/blog/categories/' . strtolower(str_replace(' ', '-', $bc->category))) }}" style="display:inline-block; padding:8px 22px; border-radius:50px; font-size:13px; font-weight:600; transition:all 0.3s; {{ $activeCategory == $bc->id ? 'background:var(--main-color); color:#fff;' : 'background:#f0f0f0; color:#333;' }}">{{ $bc->category }}</a>
				@endforeach
			</div>
			@endif

			<style>
				.blog-card-img { width:100%; height:240px; object-fit:cover; display:block; border-radius:15px 15px 0 0; }
				.news-block_one-image { overflow:hidden; }
				.news-block_one-image img { width:100%; height:240px; object-fit:cover; display:block; }
				.blog-item { display:none; }
				.blog-item.visible { display:block; }
				.load-more-btn { display:inline-flex; align-items:center; gap:10px; padding:14px 40px; background:var(--main-color); color:#fff; font-size:15px; font-weight:700; border:none; border-radius:50px; cursor:pointer; transition:all 0.4s; }
				.load-more-btn:hover { background:#111; transform:translateY(-3px); box-shadow:0 10px 25px rgba(0,0,0,0.2); }
				.load-more-btn i { transition:transform 0.3s; }
				.load-more-btn:hover i { transform:rotate(180deg); }
			</style>

			<div class="row clearfix" id="blogGrid">

				@forelse($data as $bi => $blog)
				<div class="news-block_one col-lg-4 col-md-6 col-sm-12 blog-item {{ $bi < 20 ? 'visible' : '' }}" data-index="{{ $bi }}">
					<div class="news-block_one-inner wow fadeInUp" data-wow-delay="{{ ($bi % 3) * 100 }}ms">
						<div class="news-block_one-image_outer">
							<div class="news-block_one-date">{{ \Carbon\Carbon::parse($blog->published_at ?? $blog->created_at)->format('d M') }}</div>
							<div class="news-block_one-image">
								@if(!empty($blog->blog_image))
								<a href="{{ url('/post/' . $blog->slug) }}"><img src="{{ url('cloud/' . $blog->blog_image) }}" alt="{{ $blog->blog_title }}" loading="lazy" /></a>
								<img src="{{ url('cloud/' . $blog->blog_image) }}" alt="{{ $blog->blog_title }}" loading="lazy" />
								@else
								<a href="{{ url('/post/' . $blog->slug) }}"><img src="{{ url('assets/images/resource/news-1.jpg') }}" alt="{{ $blog->blog_title }}" loading="lazy" /></a>
								<img src="{{ url('assets/images/resource/news-1.jpg') }}" alt="{{ $blog->blog_title }}" loading="lazy" />
								@endif
							</div>
						</div>
						<div class="news-block_one-content">
							<ul class="news-block_one-meta">
								<li><span class="icon fa-regular fa-user fa-fw"></span>{{ $blog->author ?? 'Admin' }}</li>
								<li><span class="icon fa-solid fa-eye fa-fw"></span>{{ $blog->view_counts ?? 0 }}</li>
								<li><span class="icon fa-solid fa-heart fa-fw" style="color:red;"></span>{{ $blog->likes ?? 0 }}</li>
								@if($blog->minutes_to_read)
								<li><span class="icon fa-regular fa-clock fa-fw"></span>{{ $blog->minutes_to_read }} min</li>
								@endif
							</ul>
							<h4 class="news-block_one-title"><a href="{{ url('/post/' . $blog->slug) }}">{{ $blog->blog_title }}</a></h4>
							<div class="news-block_one-button">
								<a class="news-block_one-more" href="{{ url('/post/' . $blog->slug) }}">READ MORE</a>
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

			@if(count($data) > 20)
			<div class="text-center" style="margin-top:40px;" id="loadMoreWrap">
				<button class="load-more-btn" id="loadMoreBtn" onclick="loadMoreBlogs()">
					<i class="fa-solid fa-arrows-rotate"></i> Load More
				</button>
				<p style="margin-top:10px; color:#999; font-size:13px;" id="blogCounter">Showing <span id="visibleCount">20</span> of {{ count($data) }}</p>
			</div>
			@endif

		</div>
	</section>
	<!-- End News One -->

	<script>
	var blogBatch = 20;
	var totalBlogs = {{ count($data) }};
	var currentVisible = Math.min(20, totalBlogs);

	function loadMoreBlogs() {
		var items = document.querySelectorAll('.blog-item');
		var nextBatch = currentVisible + blogBatch;

		for (var i = currentVisible; i < Math.min(nextBatch, items.length); i++) {
			items[i].classList.add('visible');
			items[i].style.animation = 'fadeInUp 0.5s ease forwards';
		}

		currentVisible = Math.min(nextBatch, items.length);
		document.getElementById('visibleCount').textContent = currentVisible;

		if (currentVisible >= totalBlogs) {
			document.getElementById('loadMoreWrap').style.display = 'none';
		}
	}
	</script>

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

@endsection