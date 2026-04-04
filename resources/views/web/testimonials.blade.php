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
			<h2>Our Projects</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li>Projects</li>
				</ul>
				<div class="page-title_text">Explore our portfolio of construction projects across Texas and beyond.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<style>
		.category-banner {
			padding: 15px 0;
			text-align: left;
			margin: 0;
		}
		.category-banner h2 {
			color: var(--main-color);
			font-size: 22px;
			font-weight: 700;
			letter-spacing: 2px;
			margin: 0;
			text-transform: uppercase;
			padding-left: 15px;
			border-left: 4px solid var(--main-color);
		}
		.projects-section {
			padding: 60px 0;
			background: #f8f8f8;
		}
		.projects-section .auto-container {
			max-width: 1100px;
		}
		.projects-section .col-lg-6 {
			padding-left: 20px;
			padding-right: 20px;
			margin-bottom: 20px;
		}
		.project-card {
			position: relative;
			border-radius: 20px;
			overflow: hidden;
			margin-bottom: 30px;
			height: 320px;
			cursor: pointer;
		}
		.project-card_media {
			position: relative;
			width: 100%;
			height: 100%;
			overflow: hidden;
		}
		.project-card_media > img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: transform 0.5s ease;
		}
		.project-card:hover .project-card_media > img {
			transform: scale(1.08);
		}
		.project-card_overlay {
			position: absolute;
			left: 0; bottom: 0;
			width: 100%;
			padding: 25px 20px 20px;
			background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, transparent 100%);
			z-index: 3;
		}
		.project-card_overlay .pc-category {
			display: inline-block;
			background: var(--main-color);
			color: #fff;
			font-size: 12px;
			font-weight: 600;
			padding: 3px 12px;
			border-radius: 4px;
			margin-bottom: 8px;
		}
		.project-card_overlay .pc-title {
			color: #fff;
			font-size: 20px;
			font-weight: 700;
			margin: 0;
			line-height: 1.3;
		}
		.project-card_overlay .pc-caption {
			color: rgba(255,255,255,0.7);
			font-size: 13px;
			margin-top: 5px;
		}
		/* Video card */
		.project-card_video {
			position: absolute;
			top: 0; left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
			z-index: 1;
		}
		.project-card_thumb {
			position: absolute;
			top: 0; left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
			z-index: 2;
			transition: opacity 0.4s ease;
		}
		.project-card_play {
			position: absolute;
			top: 50%; left: 50%;
			transform: translate(-50%, -50%);
			z-index: 4;
			font-size: 50px;
			color: #fff;
			text-shadow: 0 0 20px rgba(0,0,0,0.5);
			opacity: 0.8;
			pointer-events: none;
			transition: opacity 0.3s;
		}
		/* Slideshow */
		.project-card_slideshow {
			position: relative;
			width: 100%;
			height: 100%;
		}
		.project-card_slideshow img {
			position: absolute;
			top: 0; left: 0;
			width: 100%;
			height: 100%;
			object-fit: cover;
			transition: opacity 1s ease-in-out;
		}
		.project-card_slideshow .slide-counter {
			position: absolute;
			top: 12px; right: 12px;
			background: rgba(0,0,0,0.6);
			color: #fff;
			padding: 4px 12px;
			border-radius: 20px;
			font-size: 12px;
			z-index: 5;
		}
		.no-projects-msg {
			text-align: center;
			padding: 80px 0;
			color: #999;
			font-size: 18px;
		}
	</style>

	@forelse($categories as $catIndex => $category)
	@if(count($category->projects) > 0)

	<!-- Category Banner -->
	<div class="projects-section" style="padding-bottom:0;">
		<div class="auto-container">
			<div class="category-banner">
				<h2>{{ $category->name }}</h2>
			</div>
		</div>
	</div>

	<!-- Projects Grid -->
	<section class="projects-section">
		<div class="auto-container">
			<div class="row clearfix">
				@foreach($category->projects as $project)
				@php $images = json_decode($project->images, true) ?? []; @endphp
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="project-card" data-project-id="{{ $project->id }}">
						<div class="project-card_media">

							{{-- VIDEO + THUMBNAIL --}}
							@if(!empty($project->video_path))
							<video preload="none" muted loop class="project-card_video">
								<source src="{{ url('cloud/' . $project->video_path) }}" type="video/mp4">
							</video>
							@if(!empty($project->thumbnail))
							<img src="{{ url('cloud/' . $project->thumbnail) }}" alt="{{ $project->title }}" loading="lazy" class="project-card_thumb">
							@endif
							<div class="project-card_play"><i class="fa fa-play-circle"></i></div>

							{{-- SLIDESHOW --}}
							@elseif(count($images) > 1)
							<div class="project-card_slideshow" data-slideshow-id="{{ $project->id }}">
								@foreach($images as $idx => $img)
								<img src="{{ url('cloud/' . $img) }}" class="pslide-{{ $project->id }}" alt="{{ $project->title }}" loading="lazy" style="opacity:{{ $idx === 0 ? '1' : '0' }};">
								@endforeach
								<div class="slide-counter"><i class="fa fa-images"></i> {{ count($images) }}</div>
							</div>

							{{-- THUMBNAIL ONLY --}}
							@elseif(!empty($project->thumbnail))
							<img src="{{ url('cloud/' . $project->thumbnail) }}" alt="{{ $project->title }}" loading="lazy">

							{{-- SINGLE IMAGE --}}
							@elseif(count($images) === 1)
							<img src="{{ url('cloud/' . $images[0]) }}" alt="{{ $project->title }}" loading="lazy">

							{{-- FALLBACK --}}
							@else
							<div style="width:100%; height:100%; background:#222; display:flex; align-items:center; justify-content:center;">
								<span style="color:#555;">No media</span>
							</div>
							@endif

						</div>

						<!-- Overlay -->
						<div class="project-card_overlay">
							<span class="pc-category">{{ $category->name }}</span>
							<h4 class="pc-title">{{ $project->title }}</h4>
							@if($project->description)
							<div class="pc-caption">{{ Str::limit($project->description, 60) }}</div>
							@endif
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	@endif
	@empty
	<div class="no-projects-msg">
		<p>No projects available at the moment. Check back soon!</p>
	</div>
	@endforelse

	@include('web.partials.portfolio-download')

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

<script>
// Video auto-play on scroll
var videoObserver = new IntersectionObserver(function(entries) {
	entries.forEach(function(entry) {
		var card = entry.target;
		var video = card.querySelector('.project-card_video');
		var thumb = card.querySelector('.project-card_thumb');
		var playIcon = card.querySelector('.project-card_play');
		if (!video) return;

		if (entry.isIntersecting) {
			if (thumb) thumb.style.opacity = '0';
			if (playIcon) playIcon.style.opacity = '0';
			video.play();
		} else {
			video.pause();
			video.currentTime = 0;
			if (thumb) thumb.style.opacity = '1';
			if (playIcon) playIcon.style.opacity = '1';
		}
	});
}, { threshold: 0.4 });

document.querySelectorAll('.project-card').forEach(function(card) {
	var video = card.querySelector('.project-card_video');
	if (video) {
		videoObserver.observe(card);
		card.addEventListener('click', function() {
			if (video.requestFullscreen) video.requestFullscreen();
			video.muted = false;
			video.play();
		});
	}
});

// Slideshow auto-play
document.querySelectorAll('.project-card_slideshow').forEach(function(container) {
	var id = container.getAttribute('data-slideshow-id');
	if (!id) return;
	var imgs = container.querySelectorAll('.pslide-' + id);
	if (imgs.length < 2) return;
	var cur = 0;
	setInterval(function() {
		imgs[cur].style.opacity = '0';
		cur = (cur + 1) % imgs.length;
		imgs[cur].style.opacity = '1';
	}, 2500);
});

// Fullscreen slideshow on click
document.querySelectorAll('.project-card_slideshow').forEach(function(container) {
	container.closest('.project-card').addEventListener('click', function() {
		var id = container.getAttribute('data-slideshow-id');
		var imgs = container.querySelectorAll('.pslide-' + id);
		if (imgs.length < 2) return;
		var srcs = []; imgs.forEach(function(i){srcs.push(i.src);});

		var ov = document.createElement('div');
		ov.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.95);z-index:99999;display:flex;align-items:center;justify-content:center;';
		var im = document.createElement('img');
		im.style.cssText = 'max-width:90%;max-height:85vh;object-fit:contain;border-radius:8px;transition:opacity 0.8s ease;';
		im.src = srcs[0];
		var ct = document.createElement('div');
		ct.style.cssText = 'position:absolute;bottom:30px;left:50%;transform:translateX(-50%);color:#fff;font-size:16px;background:rgba(0,0,0,0.5);padding:8px 20px;border-radius:30px;';
		ct.textContent = '1 / ' + srcs.length;
		var cl = document.createElement('div');
		cl.innerHTML = '<i class="fa fa-times"></i>';
		cl.style.cssText = 'position:absolute;top:20px;right:30px;color:#fff;font-size:30px;cursor:pointer;z-index:100000;';
		ov.appendChild(im); ov.appendChild(ct); ov.appendChild(cl);
		document.body.appendChild(ov);
		var fi = 0;
		var si = setInterval(function(){
			im.style.opacity='0';
			setTimeout(function(){fi=(fi+1)%srcs.length;im.src=srcs[fi];ct.textContent=(fi+1)+' / '+srcs.length;im.style.opacity='1';},400);
		}, 3000);
		cl.onclick = function(){clearInterval(si);ov.remove();};
		ov.addEventListener('click',function(e){if(e.target===ov){clearInterval(si);ov.remove();}});
	});
});
</script>

@endsection