@extends('web.layouts.app')
@section('title', 'Page Title')
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
			<h2>Gallery</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li>Gallery</li>
				</ul>
				<div class="page-title_text">Explore our hospital facilities, events, and memorable moments.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Gallery Section -->
	<section class="project-one style-two">
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title">Our Gallery</div>
				<h2 class="sec-title_heading">Explore Our Facilities <br> and Moments</h2>
			</div>

			<!-- Toggle Buttons -->
			<div class="d-flex justify-content-center mb-5">
				<button id="showImages" class="theme-btn btn-style-one active" style="margin-right:10px;">
					<span class="btn-wrap">
						<span class="text-one">Images</span>
						<span class="text-two">Images</span>
					</span>
				</button>
				<button id="showVideos" class="theme-btn btn-style-three">
					<span class="btn-wrap">
						<span class="text-one">Videos</span>
						<span class="text-two">Videos</span>
					</span>
				</button>
			</div>

			<!-- Images Section -->
			<div id="imagesSection" class="row clearfix">
				@foreach($data as $row)
				@if($row->type == 'IMAGE')
				<div class="col-lg-4 col-md-6 col-sm-12" style="margin-bottom:30px;">
					<div class="gallery-card wow fadeInUp">
						<a href="{{ 'cloud/'.$row->image_path }}" data-lightbox="hospital-gallery" data-title="{{ $row->image_title }}">
							<div class="gallery-card_image">
								<img src="{{ 'cloud/'.$row->image_path }}" alt="{{ $row->image_title }}" />
								<div class="gallery-card_overlay">
									<i class="fa-classic fa-solid fa-expand fa-fw"></i>
								</div>
							</div>
						</a>
					</div>
				</div>
				@endif
				@endforeach
			</div>

			<style>
				.gallery-card {
					position: relative;
					overflow: hidden;
					border-radius: 15px;
				}
				.gallery-card_image {
					position: relative;
					overflow: hidden;
				}
				.gallery-card_image img {
					width: 100%;
					height: 280px;
					object-fit: cover;
					display: block;
					transition: transform 0.5s ease;
				}
				.gallery-card:hover .gallery-card_image img {
					transform: scale(1.1);
				}
				.gallery-card_overlay {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background: rgba(16, 15, 134, 0.5);
					display: flex;
					align-items: center;
					justify-content: center;
					opacity: 0;
					transition: opacity 0.4s ease;
				}
				.gallery-card:hover .gallery-card_overlay {
					opacity: 1;
				}
				.gallery-card_overlay i {
					font-size: 40px;
					color: #fff;
					width: 70px;
					height: 70px;
					line-height: 70px;
					text-align: center;
					border: 2px solid #fff;
					border-radius: 50%;
				}
			</style>

			<style>
				.video-card {
					position: relative;
					border-radius: 15px;
					overflow: hidden;
					margin-bottom: 30px;
					background: #000;
					box-shadow: 0 5px 20px rgba(0,0,0,0.15);
				}
				.video-card_media {
					position: relative;
					width: 100%;
					height: 250px;
					overflow: hidden;
				}
				.video-card_media video,
				.video-card_media iframe {
					width: 100%;
					height: 100%;
					object-fit: cover;
					border: 0;
				}
				.video-card_info {
					padding: 15px 18px;
					background: #111;
				}
				.video-card_info h5 {
					margin: 0;
					font-size: 16px;
					font-weight: 600;
					color: #fff;
				}
				.video-card_info .vc-badge {
					display: inline-block;
					font-size: 11px;
					padding: 2px 10px;
					border-radius: 20px;
					margin-top: 6px;
					font-weight: 500;
				}
				.vc-badge.upload { background: var(--main-color); color: #fff; }
				.vc-badge.url { background: #c00; color: #fff; }
				.vc-badge.slideshow { background: #e8a317; color: #111; }
				/* Slideshow inside video card */
				.video-card_slideshow {
					position: relative;
					width: 100%;
					height: 100%;
				}
				.video-card_slideshow img {
					position: absolute;
					top: 0; left: 0;
					width: 100%;
					height: 100%;
					object-fit: cover;
					transition: opacity 1s ease-in-out;
				}
				.video-card_slideshow .ss-counter {
					position: absolute;
					bottom: 8px; right: 8px;
					background: rgba(0,0,0,0.6);
					color: #fff;
					padding: 3px 10px;
					border-radius: 20px;
					font-size: 11px;
					z-index: 2;
				}
				.video-card_slideshow .ss-play {
					position: absolute;
					top: 50%; left: 50%;
					transform: translate(-50%,-50%);
					font-size: 45px;
					color: #fff;
					text-shadow: 0 0 15px rgba(0,0,0,0.5);
					opacity: 0.7;
					z-index: 2;
					pointer-events: none;
				}
			</style>

			<!-- Videos Section (Initially Hidden) -->
			<div id="videosSection" class="row clearfix" style="display: none;">
				@foreach($data as $row)

				{{-- Type 1: Direct Video Upload --}}
				@if($row->type == 'VIDEO')
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="video-card wow fadeInUp">
						<div class="video-card_media">
							<video controls autoplay muted loop preload="metadata">
								<source src="{{ 'cloud/'.$row->video_path }}" type="video/mp4">
							</video>
						</div>
						<div class="video-card_info">
							<h5>{{ $row->image_title }}</h5>
							<span class="vc-badge upload"><i class="fa fa-video"></i> Video</span>
						</div>
					</div>
				</div>
				@endif

				{{-- Type 2: YouTube / Video URL --}}
				@if($row->type == 'VIDEO_URL')
				@php
					$videoUrl = $row->video_url;
					$embedUrl = '';
					if (str_contains($videoUrl, 'youtube.com/watch')) {
						parse_str(parse_url($videoUrl, PHP_URL_QUERY), $params);
						$embedUrl = 'https://www.youtube.com/embed/' . ($params['v'] ?? '');
					} elseif (str_contains($videoUrl, 'youtu.be/')) {
						$embedUrl = 'https://www.youtube.com/embed/' . basename(parse_url($videoUrl, PHP_URL_PATH));
					} elseif (str_contains($videoUrl, 'vimeo.com/')) {
						$embedUrl = 'https://player.vimeo.com/video/' . basename(parse_url($videoUrl, PHP_URL_PATH));
					} else {
						$embedUrl = $videoUrl;
					}
				@endphp
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="video-card wow fadeInUp">
						<div class="video-card_media">
							<iframe src="{{ $embedUrl }}" allowfullscreen></iframe>
						</div>
						<div class="video-card_info">
							<h5>{{ $row->image_title }}</h5>
							<span class="vc-badge url"><i class="fa-brands fa-youtube"></i> YouTube</span>
						</div>
					</div>
				</div>
				@endif

				{{-- Type 3: Image Slideshow --}}
				@if($row->type == 'VIDEO_SLIDESHOW')
				@php $slideshowImages = json_decode($row->slideshow_images, true); @endphp
				@if($slideshowImages && count($slideshowImages) > 0)
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="video-card wow fadeInUp">
						<div class="video-card_media">
							<div class="video-card_slideshow slideshow-container" data-slideshow-id="{{ $row->id }}" style="cursor:pointer;">
								@foreach($slideshowImages as $idx => $img)
								<img src="{{ url('cloud/' . $img) }}" class="slideshow-img-{{ $row->id }}" alt="{{ $row->image_title }}" style="opacity:{{ $idx === 0 ? '1' : '0' }};">
								@endforeach
								<div class="ss-counter"><i class="fa fa-images"></i> {{ count($slideshowImages) }}</div>
								<div class="ss-play"><i class="fa fa-play-circle"></i></div>
							</div>
						</div>
						<div class="video-card_info">
							<h5>{{ $row->image_title }}</h5>
							<span class="vc-badge slideshow"><i class="fa fa-images"></i> Slideshow</span>
						</div>
					</div>
				</div>
				@endif
				@endif

				@endforeach
			</div>

		</div>
	</section>
	<!-- End Gallery Section -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

<script>
	document.getElementById('showImages').addEventListener('click', function() {
		document.getElementById('imagesSection').style.display = 'flex';
		document.getElementById('videosSection').style.display = 'none';
		this.classList.add('active');
		document.getElementById('showVideos').classList.remove('active');
	});

	document.getElementById('showVideos').addEventListener('click', function() {
		document.getElementById('videosSection').style.display = 'flex';
		document.getElementById('imagesSection').style.display = 'none';
		this.classList.add('active');
		document.getElementById('showImages').classList.remove('active');
		startAllSlideshows();
	});

	// Image Slideshow Engine
	var slideshowIntervals = {};

	function startAllSlideshows() {
		document.querySelectorAll('.slideshow-container').forEach(function(container) {
			var id = container.getAttribute('data-slideshow-id');
			if (slideshowIntervals[id]) return; // already running

			var images = container.querySelectorAll('.slideshow-img-' + id);
			if (images.length < 2) return;

			var current = 0;
			slideshowIntervals[id] = setInterval(function() {
				images[current].style.opacity = '0';
				current = (current + 1) % images.length;
				images[current].style.opacity = '1';
			}, 2500); // 2.5 seconds per image
		});
	}

	// Fullscreen slideshow on click
	document.addEventListener('click', function(e) {
		var container = e.target.closest('.slideshow-container');
		if (!container) return;

		var id = container.getAttribute('data-slideshow-id');
		var images = container.querySelectorAll('.slideshow-img-' + id);
		var srcs = [];
		images.forEach(function(img) { srcs.push(img.src); });

		// Create fullscreen overlay
		var overlay = document.createElement('div');
		overlay.id = 'slideshow-fullscreen';
		overlay.style.cssText = 'position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.95); z-index:99999; display:flex; align-items:center; justify-content:center; cursor:pointer;';

		var img = document.createElement('img');
		img.style.cssText = 'max-width:90%; max-height:85vh; object-fit:contain; border-radius:8px; transition:opacity 0.8s ease;';
		img.src = srcs[0];

		var counter = document.createElement('div');
		counter.style.cssText = 'position:absolute; bottom:30px; left:50%; transform:translateX(-50%); color:#fff; font-size:16px; background:rgba(0,0,0,0.5); padding:8px 20px; border-radius:30px;';

		var closeBtn = document.createElement('div');
		closeBtn.innerHTML = '<i class="fa fa-times"></i>';
		closeBtn.style.cssText = 'position:absolute; top:20px; right:30px; color:#fff; font-size:30px; cursor:pointer; z-index:100000;';
		closeBtn.onclick = function() { clearInterval(fsInterval); overlay.remove(); };

		overlay.appendChild(img);
		overlay.appendChild(counter);
		overlay.appendChild(closeBtn);
		document.body.appendChild(overlay);

		var fsIdx = 0;
		counter.textContent = '1 / ' + srcs.length;

		var fsInterval = setInterval(function() {
			img.style.opacity = '0';
			setTimeout(function() {
				fsIdx = (fsIdx + 1) % srcs.length;
				img.src = srcs[fsIdx];
				counter.textContent = (fsIdx + 1) + ' / ' + srcs.length;
				img.style.opacity = '1';
			}, 400);
		}, 3000);

		overlay.addEventListener('click', function(ev) {
			if (ev.target === overlay) { clearInterval(fsInterval); overlay.remove(); }
		});
	});
</script>

@endsection