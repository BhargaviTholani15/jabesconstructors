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
			<h2>Gallery</h2>
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<ul class="bread-crumb clearfix">
					<li><a href="<?= url('/') ?>">Home</a></li>
					<li>Gallery</li>
				</ul>
				<div class="page-title_text">Explore our construction projects, facilities, and memorable moments.</div>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<style>
		.gallery-tabs { display:flex; justify-content:center; gap:0; margin-bottom:50px; }
		.gallery-tab { padding:14px 40px; font-size:15px; font-weight:700; text-transform:uppercase; letter-spacing:2px; cursor:pointer; border:none; background:#f0f0f0; color:#666; transition:all 0.4s ease; position:relative; }
		.gallery-tab:first-child { border-radius:50px 0 0 50px; }
		.gallery-tab:last-child { border-radius:0 50px 50px 0; }
		.gallery-tab.active { background:var(--main-color); color:#fff; }
		.gallery-tab:hover:not(.active) { background:#e0e0e0; color:#333; }
		.gallery-tab i { margin-right:8px; }

		.gallery-card { position:relative; overflow:hidden; border-radius:15px; margin-bottom:30px; }
		.gallery-card_image { position:relative; overflow:hidden; }
		.gallery-card_image img { width:100%; height:280px; object-fit:cover; display:block; transition:transform 0.6s ease; }
		.gallery-card:hover .gallery-card_image img { transform:scale(1.08); }
		.gallery-card_overlay { position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(16,15,134,0.5); display:flex; align-items:center; justify-content:center; opacity:0; transition:opacity 0.4s ease; }
		.gallery-card:hover .gallery-card_overlay { opacity:1; }
		.gallery-card_overlay i { font-size:36px; color:#fff; width:65px; height:65px; line-height:65px; text-align:center; border:2px solid #fff; border-radius:50%; transition:transform 0.3s; }
		.gallery-card:hover .gallery-card_overlay i { transform:scale(1.1); }

		.video-card { position:relative; border-radius:15px; overflow:hidden; margin-bottom:30px; background:#000; box-shadow:0 5px 25px rgba(0,0,0,0.1); transition:transform 0.4s ease, box-shadow 0.4s ease; }
		.video-card:hover { transform:translateY(-5px); box-shadow:0 15px 40px rgba(0,0,0,0.15); }
		.video-card_media { position:relative; width:100%; height:250px; overflow:hidden; }
		.video-card_media video, .video-card_media iframe { width:100%; height:100%; object-fit:cover; border:0; }
		.video-card_info { padding:15px 18px; background:#111; display:flex; align-items:center; justify-content:space-between; }
		.video-card_info h5 { margin:0; font-size:15px; font-weight:600; color:#fff; }
		.vc-badge { display:inline-block; font-size:11px; padding:3px 12px; border-radius:20px; font-weight:600; }
		.vc-badge.upload { background:var(--main-color); color:#fff; }
		.vc-badge.url { background:#c00; color:#fff; }
		.vc-badge.slideshow { background:#e8a317; color:#111; }
		.video-card_slideshow { position:relative; width:100%; height:100%; }
		.video-card_slideshow img { position:absolute; top:0; left:0; width:100%; height:100%; object-fit:cover; transition:opacity 1s ease-in-out; }
		.video-card_slideshow .ss-counter { position:absolute; top:12px; right:12px; background:rgba(0,0,0,0.6); color:#fff; padding:3px 10px; border-radius:20px; font-size:11px; z-index:2; }
		.video-card_slideshow .ss-play { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); font-size:42px; color:#fff; text-shadow:0 0 15px rgba(0,0,0,0.5); opacity:0.7; z-index:2; pointer-events:none; }
	</style>

	<!-- Gallery Section -->
	<section class="project-one style-two" style="padding:80px 0;">
		<div class="auto-container">
			<div class="sec-title centered">
				<div class="sec-title_title">Our Gallery</div>
				<h2 class="sec-title_heading">Explore Our Work</h2>
			</div>

			<!-- Toggle Tabs -->
			<div class="gallery-tabs">
				<button id="showImages" class="gallery-tab active"><i class="fa-solid fa-images"></i> Images</button>
				<button id="showVideos" class="gallery-tab"><i class="fa-solid fa-video"></i> Videos</button>
			</div>

			<!-- Images Section -->
			<div id="imagesSection" class="row clearfix">
				@foreach($data as $row)
				@if($row->type == 'IMAGE')
				<div class="col-lg-4 col-md-6 col-sm-12">
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

			<!-- Videos Section -->
			<div id="videosSection" class="row clearfix" style="display: none;">
				@foreach($data as $row)

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

	var slideshowIntervals = {};
	function startAllSlideshows() {
		document.querySelectorAll('.slideshow-container').forEach(function(container) {
			var id = container.getAttribute('data-slideshow-id');
			if (slideshowIntervals[id]) return;
			var images = container.querySelectorAll('.slideshow-img-' + id);
			if (images.length < 2) return;
			var current = 0;
			slideshowIntervals[id] = setInterval(function() {
				images[current].style.opacity = '0';
				current = (current + 1) % images.length;
				images[current].style.opacity = '1';
			}, 2500);
		});
	}

	document.addEventListener('click', function(e) {
		var container = e.target.closest('.slideshow-container');
		if (!container) return;
		var id = container.getAttribute('data-slideshow-id');
		var images = container.querySelectorAll('.slideshow-img-' + id);
		var srcs = [];
		images.forEach(function(img) { srcs.push(img.src); });
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
		ov.addEventListener('click',function(ev){if(ev.target===ov){clearInterval(si);ov.remove();}});
	});
</script>

@endsection