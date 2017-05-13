@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

<div class="fullwidth clearfix">
	<div id="topcontainer" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">
		<p><span class="fa fa-signal"></span></p>
		<h1><span>Kanamo</span><br />is coming soon</h1>
		<p>It's almost ready ... honest</p>
	</div>
</div>


<div class="arrow-separator arrow-theme"></div>

<div class="fullwidth colour2 clearfix">
	<div id="maincont" class="bodycontainer clearfix" data-uk-scrollspy="{cls:'uk-animation-fade', delay: 300, repeat: true}">

		<p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipiscing elit. <a title="" href="#">Donec quis enim nulla</a>. Suspendisse posuere arcu ac eros iaculis egestas commodo risus tempus. Fusce placerat nulla nisi. Proin congue erat non orci adipiscing nec porttitor lacus egestas. <em>Donec venenatis</em>, risus et hendrerit ultrices, libero sem lacinia risus, ut convallis massa sapien nec libero. Suspendisse arcu orci, gravida nec aliquet ut, lacinia non nisl.</p>
        <h2>Sign up and we'll let you know when we launch</h2>
        <p>If you would like to receive <strong>news and special offers</strong> please send us your email address below:</p>
		<div id="signupform" class="sb-search clearfix">
			<form method="post" id="contact" class="clearfix">
				<input class="sb-search-input" placeholder="Enter email ..." type="text" value="">
				<input class="sb-search-submit" value="" type="submit">
				<button class="formbutton" type="submit"><span class="fa fa-arrow-right"></span></button>
			</form>
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
