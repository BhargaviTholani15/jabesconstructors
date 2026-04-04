<!-- Portfolio Download -->
@if(!empty($siteSettings['portfolio_pdf']))
<section class="portfolio-download" style="padding:60px 0; text-align:center; background:linear-gradient(135deg, #0a0952 0%, #100f86 30%, #2e2db5 60%, #4a49c9 80%, #6b6ae0 100%); position:relative; overflow:hidden;">
	<div style="position:absolute; top:0; left:0; right:0; bottom:0; background:url('{{ url('assets/images/background/pattern-2.png') }}'); opacity:0.05;"></div>
	<div class="auto-container" style="position:relative; z-index:1;">
		<div style="display:inline-block; width:60px; height:60px; line-height:60px; border-radius:50%; background:rgba(255,255,255,0.15); margin-bottom:15px;">
			<i class="fa fa-file-pdf" style="font-size:28px; color:#fff;"></i>
		</div>
		<h3 style="color:#fff; font-weight:700; margin-bottom:8px; font-size:28px;">Download Our Portfolio</h3>
		<p style="color:rgba(255,255,255,0.75); margin-bottom:30px; font-size:16px;">Explore our complete range of services, past projects, and capabilities</p>
		<a href="{{ url('cloud/' . $siteSettings['portfolio_pdf']) }}" target="_blank" download class="theme-btn btn-style-two">
			<span class="btn-wrap">
				<span class="text-one"><i class="fa fa-download" style="margin-right:8px;"></i> Download Portfolio</span>
				<span class="text-two"><i class="fa fa-download" style="margin-right:8px;"></i> Download Portfolio</span>
			</span>
		</a>
	</div>
</section>
@endif
<!-- End Portfolio Download -->