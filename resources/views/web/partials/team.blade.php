<!-- Team One -->
@if(isset($teamMembers) && count($teamMembers) > 0)
<section class="team-one">
	<div class="team-one_pattern" style="background-image:url({{ url('assets/images/background/pattern-7.png') }})"></div>
	<div class="auto-container">
		<div class="sec-title centered">
			<div class="sec-title_title">Our Expert Team</div>
			<h2 class="sec-title_heading">Meet Our Leadership</h2>
		</div>
		<div class="three-item_carousel swiper-container">
			<div class="swiper-wrapper">
				@foreach($teamMembers as $member)
				<div class="swiper-slide">
					<div class="team-block_one">
						<div class="team-block_one-inner">
							<div class="team-block_one-image">
								@if($member->image_path)
								<img src="{{ url('cloud/' . $member->image_path) }}" alt="{{ $member->name }}" />
								@else
								<img src="{{ url('assets/images/resource/team-1.jpg') }}" alt="{{ $member->name }}" />
								@endif
								<div class="team-block_one-share">
									<span class="team-block_one-share_icon fa-solid fa-share-nodes fa-fw"></span>
									<div class="team-block_one-social">
										@if($member->facebook)<a href="{{ $member->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>@endif
										@if($member->instagram)<a href="{{ $member->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>@endif
										@if($member->linkedin)<a href="{{ $member->linkedin }}" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>@endif
										@if($member->twitter)<a href="{{ $member->twitter }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>@endif
									</div>
								</div>
							</div>
							<div class="team-block_one-content">
								<h4 class="team-block_one-title" style="color: #ffffff !important;">{{ $member->name }}</h4>
								<div class="team-block_one-designation">{{ $member->designation }}</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
		<div class="team-one_lower-box">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<div class="team-one_text">We are driven to improve the lives of our clients through our commitment to leadership, excellence in craft, and attention to detail.</div>
				<div class="team-one_button">
					<a href="{{ url('/about-us') }}" class="theme-btn btn-style-three">
						<span class="btn-wrap">
							<span class="text-one">Learn More <i><img src="{{ url('assets/images/icons/arrow-1.svg') }}" alt="" /></i></span>
							<span class="text-two">Learn More <i><img src="{{ url('assets/images/icons/arrow-1.svg') }}" alt="" /></i></span>
						</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
@endif
<!-- End Team One -->