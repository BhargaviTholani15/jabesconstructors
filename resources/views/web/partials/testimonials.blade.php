<!-- Testimonials -->
@if(isset($testimonials) && count($testimonials) > 0)
<section id="testimonial-section" style="padding:100px 0; background:#111; position:relative; overflow:hidden;">
	<div style="position:absolute; top:0; left:0; right:0; bottom:0; background:url('{{ url('assets/images/background/pattern-2.png') }}'); opacity:0.03;"></div>
	<div class="auto-container" style="position:relative; z-index:1;">
		<div class="sec-title centered">
			<div class="sec-title_title" style="color:var(--main-color);">Testimonials</div>
			<h2 class="sec-title_heading" style="color:#fff;">What Our Clients Say</h2>
		</div>

		<div class="three-item_carousel swiper-container">
			<div class="swiper-wrapper">
				@foreach($testimonials as $ti => $testimonial)
				<div class="swiper-slide">
					<div class="wow fadeInUp" data-wow-delay="{{ ($ti % 3) * 150 }}ms" style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.08); border-radius:20px; padding:35px 30px; height:100%; backdrop-filter:blur(5px); transition:all 0.3s;">
						<!-- Stars -->
						<div style="margin-bottom:18px;">
							<span class="fa fa-star" style="color:#f5a623; font-size:14px;"></span>
							<span class="fa fa-star" style="color:#f5a623; font-size:14px;"></span>
							<span class="fa fa-star" style="color:#f5a623; font-size:14px;"></span>
							<span class="fa fa-star" style="color:#f5a623; font-size:14px;"></span>
							<span class="fa fa-star" style="color:#f5a623; font-size:14px;"></span>
						</div>
						<!-- Quote -->
						<div style="font-size:40px; color:var(--main-color); line-height:1; margin-bottom:10px; font-family:serif;">"</div>
						<!-- Review -->
						<p style="color:rgba(255,255,255,0.8); font-size:15px; line-height:28px; margin-bottom:25px;">{{ Str::limit($testimonial->review, 200) }}</p>
						<!-- Author -->
						<div style="display:flex; align-items:center; gap:12px; border-top:1px solid rgba(255,255,255,0.1); padding-top:20px;">
							@if($testimonial->image_path)
							<img src="{{ url('cloud/' . $testimonial->image_path) }}" alt="{{ $testimonial->name }}" style="width:45px; height:45px; border-radius:50%; object-fit:cover; border:2px solid var(--main-color);">
							@else
							<div style="width:45px; height:45px; border-radius:50%; background:var(--main-color); color:#fff; display:flex; align-items:center; justify-content:center; font-size:18px; font-weight:700; flex-shrink:0;">{{ strtoupper(substr($testimonial->name, 0, 1)) }}</div>
							@endif
							<div>
								<h5 style="color:#fff; margin:0; font-size:16px; font-weight:600;">{{ $testimonial->name }}</h5>
								<span style="color:rgba(255,255,255,0.5); font-size:13px;">{{ $testimonial->designation }}</span>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

	</div>
</section>
@endif
<!-- End Testimonials -->