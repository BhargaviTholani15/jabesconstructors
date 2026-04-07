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
					<div class="text">{{ $siteSettings['footer_text'] ?? '' }}</div>
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
					<li>{{ Str::limit($data->blog_title, 40) }}</li>
				</ul>
			</div>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Blog Detail -->
    <div class="sidebar-page-container" style="padding:80px 0;">
    	<div class="auto-container">
        	<div class="row clearfix">

				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="blog-detail">
						<!-- Featured Image -->
						@if(!empty($data->blog_image))
						<div style="border-radius:15px; overflow:hidden; margin-bottom:25px;">
							<img src="{{ url('cloud/' . $data->blog_image) }}" alt="{{ $data->blog_title }}" style="width:100%; display:block;" />
						</div>
						@endif

						<!-- Meta Info -->
						<div style="display:flex; align-items:center; flex-wrap:wrap; gap:20px; margin-bottom:20px; color:#888; font-size:14px;">
							<span><i class="fa fa-user" style="color:var(--main-color); margin-right:5px;"></i> {{ $data->author ?? 'Admin' }}</span>
							<span><i class="fa fa-calendar" style="color:var(--main-color); margin-right:5px;"></i> {{ \Carbon\Carbon::parse($data->published_at ?? $data->created_at)->format('d M, Y') }}</span>
							@if($data->minutes_to_read)
							<span><i class="fa fa-clock" style="color:var(--main-color); margin-right:5px;"></i> {{ $data->minutes_to_read }} min read</span>
							@endif
							<span><i class="fa fa-eye" style="color:var(--main-color); margin-right:5px;"></i> {{ $data->view_counts }} views</span>
							<span><i class="fa fa-heart" style="color:red; margin-right:5px;"></i> <span id="like-count">{{ $data->likes }}</span> likes</span>
						</div>

						<!-- Categories -->
						@if(!empty($selectedCats))
						<div style="margin-bottom:20px;">
							@foreach($categories as $cat)
								@if(in_array($cat->id, $selectedCats))
								<a href="{{ url('/blogs?category=' . $cat->id) }}" style="display:inline-block; padding:4px 14px; background:rgba(16,15,134,0.1); color:var(--main-color); border-radius:20px; font-size:13px; font-weight:600; margin-right:5px; transition:all 0.3s;">{{ $cat->category }}</a>
								@endif
							@endforeach
						</div>
						@endif

						<!-- Title -->
						<h2 style="font-size:30px; font-weight:800; margin-bottom:20px; color:#111;">{{ $data->blog_title }}</h2>

						<!-- Inner Image -->
						@if(!empty($data->inner_image))
						<div style="border-radius:12px; overflow:hidden; margin-bottom:25px;">
							<img src="{{ url('cloud/' . $data->inner_image) }}" alt="{{ $data->blog_title }}" style="width:100%; display:block;" />
						</div>
						@endif

						<!-- Content -->
						<div style="font-size:16px; line-height:30px; color:#444;">
							{!! $data->blog_description !!}
						</div>

						<!-- Like & Share -->
						<div style="display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:15px; padding:25px 0; margin-top:30px; border-top:1px solid #eee; border-bottom:1px solid #eee;">
							<button id="like-btn" onclick="likeBlog()" style="display:inline-flex; align-items:center; gap:8px; padding:10px 25px; background:#fff; border:2px solid #eee; border-radius:50px; cursor:pointer; font-size:15px; font-weight:600; transition:all 0.3s;">
								<i class="fa fa-heart" style="color:red;"></i> Like (<span id="like-count-btn">{{ $data->likes }}</span>)
							</button>
							<div style="display:flex; gap:10px;">
								<span style="color:#888; font-size:14px; align-self:center;">Share:</span>
								@if(!empty($siteSettings['facebook']))<a href="{{ $siteSettings['facebook'] }}" target="_blank" style="width:36px; height:36px; line-height:36px; text-align:center; border-radius:50%; background:var(--main-color); color:#fff; font-size:13px;"><i class="fa-brands fa-facebook-f"></i></a>@endif
								@if(!empty($siteSettings['linkedin']))<a href="{{ $siteSettings['linkedin'] }}" target="_blank" style="width:36px; height:36px; line-height:36px; text-align:center; border-radius:50%; background:var(--main-color); color:#fff; font-size:13px;"><i class="fa-brands fa-linkedin-in"></i></a>@endif
								@if(!empty($siteSettings['instagram']))<a href="{{ $siteSettings['instagram'] }}" target="_blank" style="width:36px; height:36px; line-height:36px; text-align:center; border-radius:50%; background:var(--main-color); color:#fff; font-size:13px;"><i class="fa-brands fa-instagram"></i></a>@endif
							</div>
						</div>

						<!-- Comments Section -->
						<div style="margin-top:40px;">
							<h3 style="font-size:22px; font-weight:700; margin-bottom:25px;">Comments ({{ count($comments) }})</h3>

							@foreach($comments as $comment)
							<div style="display:flex; gap:15px; margin-bottom:25px; padding-bottom:25px; border-bottom:1px solid #f0f0f0;">
								<div style="width:45px; height:45px; border-radius:50%; background:var(--main-color); color:#fff; display:flex; align-items:center; justify-content:center; font-size:18px; font-weight:700; flex-shrink:0;">{{ strtoupper(substr($comment->name, 0, 1)) }}</div>
								<div style="flex:1;">
									<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:5px;">
										<strong style="font-size:16px;">{{ $comment->name }}</strong>
										<small style="color:#999;">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</small>
									</div>
									<p style="margin:0; color:#555; font-size:15px; line-height:26px;">{{ $comment->comment }}</p>
								</div>
							</div>
							@endforeach

							@if(count($comments) == 0)
							<p style="color:#999;">No comments yet. Be the first to comment!</p>
							@endif

							<!-- Comment Form -->
							<div style="margin-top:30px; padding:30px; background:#f8f8f8; border-radius:15px;">
								<h4 style="font-size:18px; font-weight:700; margin-bottom:20px;">Leave a Comment</h4>
								@if(session('comment_success'))
								<div class="alert alert-success" style="border-radius:10px;">{{ session('comment_success') }}</div>
								@endif
								<form action="{{ url('/blogs/' . $data->slug . '/comment') }}" method="POST">
									@csrf
									<div class="row">
										<div class="col-md-12 mb-3">
											<input type="text" name="name" placeholder="Your Name *" required style="width:100%; padding:12px 20px; border:1px solid #e0e0e0; border-radius:50px; font-size:15px; outline:none;">
										</div>
										<div class="col-md-12 mb-3">
											<textarea name="comment" placeholder="Your Comment *" required rows="4" style="width:100%; padding:15px 20px; border:1px solid #e0e0e0; border-radius:15px; font-size:15px; outline:none; resize:vertical;"></textarea>
										</div>
										<div class="col-md-12">
											<button type="submit" style="padding:12px 35px; background:var(--main-color); color:#fff; border:none; border-radius:50px; font-size:15px; font-weight:700; cursor:pointer; transition:all 0.3s;">
												<i class="fa fa-paper-plane" style="margin-right:8px;"></i> Post Comment
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>

				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">

						<!-- Recent Posts -->
						<div class="sidebar-widget" style="background:#fff; border-radius:15px; padding:25px; box-shadow:0 3px 15px rgba(0,0,0,0.06); margin-bottom:25px;">
							<h4 style="font-size:18px; margin-bottom:20px; padding-bottom:12px; border-bottom:2px solid var(--main-color); display:inline-block;">Recent Posts</h4>
							@php
								$recentBlogs = \Illuminate\Support\Facades\DB::table('blogs')
									->where('active_flag', 1)
									->where('id', '!=', $data->id)
									->orderByDesc('created_at')
									->limit(4)
									->get();
							@endphp
							@foreach($recentBlogs as $recent)
							<div style="display:flex; gap:12px; margin-bottom:15px; padding-bottom:15px; border-bottom:1px solid #f0f0f0;">
								@if(!empty($recent->blog_image))
								<img src="{{ url('cloud/' . $recent->blog_image) }}" alt="" style="width:70px; height:70px; border-radius:10px; object-fit:cover; flex-shrink:0;" />
								@endif
								<div>
									<h5 style="margin:0 0 5px; font-size:14px; line-height:20px;"><a href="{{ url('/blogs/' . $recent->slug) }}" style="color:#111;">{{ Str::limit($recent->blog_title, 50) }}</a></h5>
									<small style="color:#999;"><i class="fa fa-calendar"></i> {{ \Carbon\Carbon::parse($recent->created_at)->format('d M, Y') }}</small>
								</div>
							</div>
							@endforeach
						</div>

						<!-- Categories -->
						@if(isset($categories) && count($categories) > 0)
						<div class="sidebar-widget" style="background:#fff; border-radius:15px; padding:25px; box-shadow:0 3px 15px rgba(0,0,0,0.06); margin-bottom:25px;">
							<h4 style="font-size:18px; margin-bottom:20px; padding-bottom:12px; border-bottom:2px solid var(--main-color); display:inline-block;">Categories</h4>
							@foreach($categories as $cat)
							<a href="{{ url('/blogs?category=' . $cat->id) }}" style="display:block; padding:10px 15px; margin-bottom:8px; background:#f8f8f8; border-radius:8px; color:#333; font-size:14px; font-weight:600; transition:all 0.3s;">
								<i class="fa fa-angle-right" style="margin-right:8px; color:var(--main-color);"></i> {{ $cat->category }}
							</a>
							@endforeach
						</div>
						@endif

						<!-- Our Services -->
						@php
							$sidebarServices = \Illuminate\Support\Facades\DB::table('services')
								->where('active_flag', 1)
								->where('type', 'service')
								->orderByRaw('order_no IS NULL, order_no ASC')
								->get();
						@endphp
						<div class="sidebar-widget" style="background:#fff; border-radius:15px; padding:25px; box-shadow:0 3px 15px rgba(0,0,0,0.06); margin-bottom:25px;">
							<h4 style="font-size:18px; margin-bottom:20px; padding-bottom:12px; border-bottom:2px solid var(--main-color); display:inline-block;">Our Services</h4>
							@foreach($sidebarServices as $svc)
							<a href="{{ url('/services/' . $svc->slug) }}" style="display:block; padding:10px 15px; margin-bottom:8px; background:#f8f8f8; border-radius:8px; color:#333; font-size:14px; font-weight:600; transition:all 0.3s;">
								<i class="fa fa-angle-right" style="margin-right:8px; color:var(--main-color);"></i> {{ $svc->service_title }}
							</a>
							@endforeach
						</div>

					</aside>
				</div>

			</div>
		</div>
	</div>
	<!-- End Blog Detail -->

	@include('web.partials.marketing-marquee')

	@include('web.partials.clients-slider')

	<script>
	function likeBlog() {
		fetch('{{ url("/blogs/" . $data->slug . "/like") }}', {
			method: 'POST',
			headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Content-Type': 'application/json' },
		})
		.then(r => r.json())
		.then(d => {
			document.getElementById('like-count').textContent = d.likes;
			document.getElementById('like-count-btn').textContent = d.likes;
			var btn = document.getElementById('like-btn');
			btn.style.background = 'rgba(255,0,0,0.05)';
			btn.style.borderColor = 'red';
		});
	}
	</script>

	@if(session('comment_success'))
	<script>
		Swal.fire({icon:'success', title:'Thank You!', text:'{{ session("comment_success") }}', confirmButtonColor:'#100f86'});
	</script>
	@endif

@endsection