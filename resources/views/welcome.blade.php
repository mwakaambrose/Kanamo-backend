@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="fullwidth clearfix">
	<div id="topcontainer" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="spacer hidden-xs"><br><br><br></div>

				<p><span class="fa fa-signal"></span></p>
				<h1><span>Kanamo</span><br /></h1>
				<h3 class="alt"><em>Find your Happy Hour</em></h3>				
				<div class="spacer visible-xs"><br><br></div>
			</div>
			<div class="col-xs-12 col-sm-8">
				<img class="img-responsive" src="/imgs/laptop-mobile-graphic-trimmed.png" />
			</div>
		</div>

	</div>
</div>

<h2>This week's most popular</h2>
<div class="row popular-deals">
	@foreach([
		[
			'img_src' => 'kanamo-que-pasa-600-200.jpg', 
			'bar_name' => 'Que Pasa?', 
			'url' => 'https://www.facebook.com/quepasakampala/',
			'deal' => '2-for-1 Toxicos, UGX 2000 Tuskers',
			'date' => 'Every Wednesday, 4-7pm'
		],[
			'img_src' => 'kanamo-governor-600-200.jpg',
			'bar_name' => 'The Governor', 
			'url' => 'https://www.instagram.com/explore/locations/288852266/',
			'deal' => 'One drink free with entry before 11pm',
			'date' => 'Monday to Thursday'
		],[
			'img_src' => 'kanamo-cedars-600-200.jpg',
			'bar_name' => 'Cedars', 
			'url' => 'https://www.tripadvisor.com/Restaurant_Review-g293841-d12138333-Reviews-Cedars-Kampala_Central_Region.html',
			'deal' => 'Bottles of wine at UGX 50,000',
			'date' => 'Everyday'
		]
	] as $section)
		<div class="col-xs-12 col-sm-4">
			<a 		class="popular"
					href="{{ $section['url'] }}">
				<div class="img-pane">
					<img 	src="/imgs/{{ $section['img_src'] }}" 
							class="img-responsive" />
				</div>
				<div class="content">
					<h3 class="bar">{{ $section['bar_name'] }}</h3>
					<p class="deal">{!! $section['deal'] !!}</p>
					<p class="date">{{ $section['date'] }}</p>
				</div>
			</a>
		</div>
	@endforeach
</div>
<br>
<br>
<br>

<div class="arrow-separator arrow-white"></div>

{{-- <div class="fullwidth colour1 clearfix">
	<div id="countdown" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<div id="countdowncont" class="clearfix">
			<ul id="countscript">
				<li>
					<span class="days">00</span>
					<p>Days</p>
				</li>
				<li>
					<span class="hours">00</span>
					<p>Hours</p>
				</li>
				<li class="clearbox">
					<span class="minutes">00</span>
					<p>Minutes</p>
				</li>
				<li>
					<span class="seconds">00</span>
					<p>Seconds</p>
				</li>
			</ul>
		</div>

	</div>
</div> --}}

<div class="arrow-separator arrow-theme"></div>

<div class="row fullwidth signup colour2 clearfix">
	<div class="col-xs-12">
		<div class="">
			<div id="maincont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
		        <h2>Want drinks at great prices?</h2>
		        <p>We'll let you know!</p>
				<div id="signupform" class="sb-search clearfix">
					<form method="post" id="contact" class="clearfix">
						<input class="sb-search-input" placeholder="Enter email ..." type="text" value="">
						<input class="sb-search-submit" value="" type="submit">
						<button class="formbutton" type="submit"><span class="fa fa-arrow-right"></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="arrow-separator arrow-themelight"></div>

<div class="fullwidth clearfix">
	<div id="footercont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<p class="backtotop"><a title="" href="#backtotop"><span class="fa fa-angle-double-up"></span></a></p>
		<div id="socialmedia" class="clearfix">
			<ul>
				<li><a title="" href="#" rel="external"><span class="fa fa-facebook"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-twitter"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-google-plus"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-linkedin"></span></a></li>
				<li><a title="" href="#" rel="external"><span class="fa fa-pinterest"></span></a></li>
			</ul>
		</div>
		<p>Kanamo is powered by <a title="download website templates" href="http://www.facebook.com/TrustFinity" rel="external">TrustFinity</a> - &copy 2017 </p>
	</div>
</div>

@endsection
