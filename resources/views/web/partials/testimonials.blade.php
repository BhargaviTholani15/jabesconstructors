<!-- Testimonial One -->
@if(isset($testimonials) && count($testimonials) > 0)
<section class="testimonial-one">
	<div class="testimonial-one_circle"></div>
	<div class="auto-container">
		<div class="d-flex justify-content-between align-items-center flex-wrap">
			<div class="testimonial-one_options d-flex align-items-center flex-wrap">
				<div class="testimonial-one_reviews">
					Trusted Reviews
					<div class="rating">
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
					</div>
				</div>
				<div class="testimonial-one__trusted">
					Trusted by
					<span>leading companies across Texas</span>
				</div>
			</div>
			<div class="testimonial-one_button">
				<a href="{{ url('/contact-us') }}" class="theme-btn btn-style-three">
					<span class="btn-wrap">
						<span class="text-one">Contact Us <i><img src="{{ url('assets/images/icons/arrow-1.svg') }}" alt="" /></i></span>
						<span class="text-two">Contact Us <i><img src="{{ url('assets/images/icons/arrow-1.svg') }}" alt="" /></i></span>
					</span>
				</a>
			</div>
		</div>

		<div class="testimonial-one_carousel">
			<div class="single-item_carousel swiper-container">
				<div class="swiper-wrapper">
					@foreach($testimonials as $testimonial)
					<div class="swiper-slide">
						<div class="testimonial-block_one">
							<div class="testimonial-block_one-inner">
								<div class="testimonial-block_one-text">"{{ $testimonial->review }}"</div>
								<div class="testimonial-block_one-designation" style="display:flex; align-items:center; gap:15px;">
									@if($testimonial->image_path)
									<img src="{{ url('cloud/' . $testimonial->image_path) }}" alt="{{ $testimonial->name }}" style="width:50px; height:50px; border-radius:50%; object-fit:cover; border:2px solid var(--main-color); flex-shrink:0;">
									@else
									<div style="width:50px; height:50px; border-radius:50%; background:var(--main-color); color:#fff; display:flex; align-items:center; justify-content:center; font-size:20px; font-weight:700; flex-shrink:0;">{{ strtoupper(substr($testimonial->name, 0, 1)) }}</div>
									@endif
									<div>
										{{ $testimonial->name }} <span>{{ $testimonial->designation }}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<div class="single-item_carousel-pagination"></div>
			</div>
		</div>
	</div>
</section>
@endif
<!-- End Testimonial One -->