<!-- Portfolio Download -->
@if(!empty($siteSettings['portfolio_pdf']))
<style>
	.portfolio-section { padding:80px 0; background:#f0f0f0; position:relative; overflow:hidden; }
	.portfolio-section::before { content:''; position:absolute; top:-100px; right:-100px; width:350px; height:350px; border:40px solid rgba(16,15,134,0.06); border-radius:50%; animation:portfolioFloat 8s ease-in-out infinite; }
	.portfolio-section::after { content:''; position:absolute; bottom:-80px; left:-80px; width:250px; height:250px; border:30px solid rgba(16,15,134,0.05); border-radius:50%; animation:portfolioFloat 10s ease-in-out infinite reverse; }
	@keyframes portfolioFloat { 0%,100%{transform:translate(0,0);} 50%{transform:translate(20px,-20px);} }
	@keyframes portfolioPulse { 0%,100%{opacity:0.03;} 50%{opacity:0.08;} }
	@keyframes portfolioSlide { 0%{background-position:0 0;} 100%{background-position:100px 100px;} }
	@keyframes iconBounce { 0%,100%{transform:translateY(0);} 50%{transform:translateY(-8px);} }
	.portfolio-bg-icon { position:absolute; color:rgba(16,15,134,0.05); z-index:0; animation:portfolioPulse 4s ease-in-out infinite; }
	.portfolio-bg-icon.p1 { font-size:140px; top:10px; left:5%; animation-delay:0s; }
	.portfolio-bg-icon.p2 { font-size:100px; bottom:0; right:10%; animation-delay:1.5s; }
	.portfolio-bg-icon.p3 { font-size:80px; top:40%; left:40%; animation-delay:3s; }
	.portfolio-bg-icon.p4 { font-size:120px; top:5%; right:35%; animation-delay:0.8s; }
	.portfolio-bg-icon.p5 { font-size:90px; bottom:5%; left:25%; animation-delay:2s; }
	.portfolio-card { background:linear-gradient(135deg, #100f86 0%, #1a19a0 50%, #2e2db5 100%); border-radius:25px; padding:50px 60px; display:flex; align-items:center; justify-content:space-between; gap:40px; position:relative; overflow:hidden; z-index:1; transition:transform 0.5s ease, box-shadow 0.5s ease; }
	.portfolio-card:hover { transform:translateY(-5px); box-shadow:0 20px 60px rgba(16,15,134,0.4); }
	.portfolio-card::before { content:''; position:absolute; top:0; right:0; width:100%; height:100%; background:url('{{ url("assets/images/background/pattern-2.png") }}'); opacity:0.05; animation:portfolioSlide 20s linear infinite; }
	.portfolio-card_icon { width:90px; height:90px; min-width:90px; border-radius:20px; background:rgba(255,255,255,0.12); display:flex; align-items:center; justify-content:center; backdrop-filter:blur(5px); border:1px solid rgba(255,255,255,0.1); transition:all 0.4s ease; position:relative; z-index:1; }
	.portfolio-card:hover .portfolio-card_icon { background:rgba(255,255,255,0.2); transform:rotateY(180deg); }
	.portfolio-card_icon i { font-size:38px; color:#fff; }
	.portfolio-card_content { flex:1; position:relative; z-index:1; }
	.portfolio-card_content h3 { color:#fff; font-size:26px; font-weight:700; margin:0 0 8px; }
	.portfolio-card_content p { color:rgba(255,255,255,0.7); font-size:15px; margin:0; line-height:24px; }
	.portfolio-card_btn { display:inline-flex; align-items:center; gap:10px; padding:15px 35px; background:#fff; color:#100f86; font-size:15px; font-weight:700; border-radius:50px; text-transform:uppercase; letter-spacing:1px; transition:all 0.4s ease; white-space:nowrap; border:2px solid #fff; position:relative; z-index:1; overflow:hidden; }
	.portfolio-card_btn::before { content:''; position:absolute; top:0; left:-100%; width:100%; height:100%; background:linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transition:left 0.5s; }
	.portfolio-card_btn:hover::before { left:100%; }
	.portfolio-card_btn:hover { background:transparent; color:#fff; transform:translateY(-3px); box-shadow:0 10px 30px rgba(0,0,0,0.3); }
	.portfolio-card_btn i { font-size:18px; transition:transform 0.3s; }
	.portfolio-card_btn:hover i { animation:iconBounce 0.6s ease infinite; }
	/* Floating particles */
	.portfolio-particle { position:absolute; width:6px; height:6px; background:rgba(255,255,255,0.1); border-radius:50%; z-index:0; }
	.portfolio-particle.pp1 { top:20%; left:20%; animation:portfolioFloat 6s ease-in-out infinite; }
	.portfolio-particle.pp2 { top:60%; right:25%; animation:portfolioFloat 8s ease-in-out infinite 1s; }
	.portfolio-particle.pp3 { top:40%; left:60%; animation:portfolioFloat 7s ease-in-out infinite 2s; width:8px; height:8px; }
	.portfolio-particle.pp4 { bottom:25%; left:35%; animation:portfolioFloat 9s ease-in-out infinite 0.5s; width:4px; height:4px; }
	@media(max-width:768px) {
		.portfolio-card { flex-direction:column; text-align:center; padding:40px 30px; }
		.portfolio-card_btn { width:100%; justify-content:center; }
	}
</style>
<section class="portfolio-section">
	<!-- Background Icons -->
	<i class="portfolio-bg-icon p1 fa-solid fa-helmet-safety"></i>
	<i class="portfolio-bg-icon p2 fa-solid fa-building"></i>
	<i class="portfolio-bg-icon p3 fa-solid fa-file-lines"></i>
	<i class="portfolio-bg-icon p4 fa-solid fa-hammer"></i>
	<i class="portfolio-bg-icon p5 fa-solid fa-hard-hat"></i>
	<div class="auto-container" style="position:relative; z-index:1;">
		<div class="portfolio-card wow fadeInUp">
			<!-- Floating Particles -->
			<div class="portfolio-particle pp1"></div>
			<div class="portfolio-particle pp2"></div>
			<div class="portfolio-particle pp3"></div>
			<div class="portfolio-particle pp4"></div>
			<div class="portfolio-card_icon">
				<i class="fa-solid fa-file-pdf"></i>
			</div>
			<div class="portfolio-card_content">
				<h3>Company Portfolio</h3>
				<p>Explore our complete range of construction services, past projects, and capabilities — all in one document.</p>
			</div>
			<a href="{{ url('cloud/' . $siteSettings['portfolio_pdf']) }}" target="_blank" download class="portfolio-card_btn">
				<i class="fa-solid fa-download"></i> Download PDF
			</a>
		</div>
	</div>
</section>
@endif
<!-- End Portfolio Download -->