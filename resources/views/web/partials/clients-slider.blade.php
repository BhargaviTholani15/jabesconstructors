<!-- Clients Box One -->
@if(isset($clientLogos) && count($clientLogos) > 0)
<div class="clients-box_one style-two">
	<div class="clients-one_slider swiper-container">
		<div class="swiper-wrapper">
			@foreach($clientLogos as $client)
			<div class="swiper-slide">
				<div class="client-image">
					<a href="{{ url('cloud/' . $client->image_path) }}" data-lightbox="client-logos" data-title="{{ $client->name }}">
						<img src="{{ url('cloud/' . $client->image_path) }}" alt="{{ $client->name }}" title="{{ $client->name }}" style="height:60px; width:auto; max-width:150px; object-fit:contain;" />
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="text-center">
		<div class="client-one_subtitle">we're proud to partner with best-in-class clients</div>
	</div>
</div>
@endif
<!-- End Clients Box One -->