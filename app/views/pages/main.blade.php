@extends('layouts.master')

@section('content')
<header class="main-nav">
	<div class="container">
		Header
	</div>
</header>

<div id="introSection" class="intro-section section-root clearfix">
	<div class="intro-content">
		<h1 class="logo">Flying Bee</h1>
		<div class="center-wrap">
			<h2 class="title">BRANDING<br /> &amp; <br />CAMPAIGNING <br /> AGENCY</h2>
			<p>홈페이지 리뉴얼이 진행 중입니다.</p>
			<p>곧 좋은 모습으로 찾아 뵙겠습니다.</p>
			<div class="intro-nav row">
				<div class="col-xs-4">
					<a href="" class="section-link">SERVICES</a>
				</div>
				<div class="col-xs-4">
					<a href="" class="section-link">WORKS</a>
				</div>
				<div class="col-xs-4">
					<a href="" class="section-link">CONTACT</a>
				</div>
			</div>
		</div><!--/.center-wrap-->
	</div><!--/.intro-content-->
</div>

<div id="clientsSection" class="clients-section section-root clearfix">
	<h2>Providing creative strategies for our clients</h2>
	<p class="artofwar">"지피지기면 백전백승"</p>
	<p class="mantra">FLYING BEE는 마케팅활동을 기획함에 있어 클라이언트의 시장, 타겟, 상품 등의 정확한 Data analysis만이 성공적인 마케팅을 이뤄낼 수 있다는 점을 확신합니다.</p>
</div>

<div id="servicesSection" class="services-section section-root clearfix">
	<div class="grid-wrapper row">
		<div class="column col-xs-12 col-sm-4">
			<div class="services-intro">
				<h2>OUR SERVICES</h2>
				<p>FLYING BEE는 광고기획 뿐만 아니라 디자인, 브랜딩, 광고매체, 캠페인, 프로모션 등 다양한 서비스를 제공합니다.</p>
			</div>
		</div>
		<div class="column tile-block col-xs-12 col-sm-4">
			<figure class="service-tile">
				<img src="{{asset('assets/services/imc.png')}}" />
			</figure>
			<figure class="service-tile">
				<img src="{{asset('assets/services/data.png')}}" />
			</figure>
			<figure class="service-tile">
				<img src="{{asset('assets/services/cibi.png')}}" />
			</figure>
			<figure class="service-tile">
				<img src="{{asset('assets/services/offline.png')}}" />
			</figure>
		</div>
		<div class="column tile-block col-xs-12 col-sm-4">
			<figure class="service-tile">
				<img src="{{asset('assets/services/traditional.png')}}" />
			</figure>
			<figure class="service-tile">
				<img src="{{asset('assets/services/online.png')}}" />
			</figure>
			<figure class="service-tile">
				<img src="{{asset('assets/services/web.png')}}" />
			</figure>
			<figure class="service-tile">
				<img src="{{asset('assets/services/creative.png')}}" />
			</figure>
		</div>
	</div>
</div>

<div id="portfolioSection" class="portfolio-section section-root clearfix">
	<div class="grid-wrapper row">
		<div class="column col-xs-12 col-sm-4">
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/1.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/2.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/3.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/4.png')}}" />
			</figure>
		</div>
		<div class="column tile-block col-xs-12 col-sm-4">
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/5.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/6.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/7.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/8.png')}}" />
			</figure>
		</div>
		<div class="column tile-block col-xs-12 col-sm-4">
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/9.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/10.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/11.png')}}" />
			</figure>
			<figure class="portfolio-tile">
				<img src="{{asset('assets/portfolio/12.png')}}" />
			</figure>
		</div>
	</div>
</div>

<div class="contact-section"></div>

<footer class="footer-section section-root clearfix">
	<div class="company-info">
	<h4>유한회사 플라잉비</h4>
	서울시 금천구 가산동 493-6 대륭타운6차 10F, <br class="mobile-linebreak" />153-774<br />
	Tel. 02 587 4351 Fax. 02 587 4352<br />
	Email. contact@flyingbee.co.kr<br />
	Blog. <a href="http://blog.naver.com/flying_bee" target="_blank">http://blog.naver.com/flying_bee</a><br />
</div>
</footer>
@stop