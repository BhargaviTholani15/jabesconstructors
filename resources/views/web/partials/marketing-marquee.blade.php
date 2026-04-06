<!-- Marketing One -->
@php
	$marqueeServices = \Illuminate\Support\Facades\DB::table('services')
		->where('active_flag', 1)
		->where('type', 'service')
		->orderBy('id')
		->pluck('service_title')
		->toArray();
	if (empty($marqueeServices)) {
		$marqueeServices = ['Construction', 'Building', 'Renovation'];
	}
@endphp
<section class="marketing-one">
	<div class="outer-container">
		<div class="animation_mode">
			@foreach($marqueeServices as $mi => $mTitle)
			<h1 class="{{ $mi % 2 != 0 ? 'light' : '' }}">{{ $mTitle }}</h1>
			<span class="marketing-one_icon"><img src="{{ url('assets/images/icons/star.png') }}" alt="" /></span>
			@endforeach
		</div>
		<div class="animation_mode-two">
			@foreach(array_reverse($marqueeServices) as $mi => $mTitle)
			<h1 class="{{ $mi % 2 != 0 ? 'light' : '' }}">{{ $mTitle }}</h1>
			<span class="marketing-one_icon"><img src="{{ url('assets/images/icons/star-1.png') }}" alt="" /></span>
			@endforeach
			<!-- <h1 class="light">EM Building Contractors</h1> -->
		</div>
	</div>
</section>
<!-- End Marketing One -->