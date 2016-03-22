<?php require_once 'includes/startdocinc.php'; ?>
<?php 
$page_title = "Home Page | Welcome!";
require_once 'includes/headinc.php'; 
?>
<?php require_once 'includes/headerinc.php'; ?>
<body class="index">

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="camera_container">
			<div id="camera_wrap">
				<div class="item" data-src="images/wasteline.jpg">
					<div class="camera_caption fadeIn">
						<h3>We'll Give Your Business Fresh Ideas</h3>
						<p>Contact Us by</p>
						<a href="#" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-phone"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
					</div>
				</div>
				<div class="item" data-src="images/bodywrap.jpg">
					<div class="camera_caption fadeIn">
						<h3>We'll Make You Noticeable</h3>
						<p>Contact Us by</p>
						<a href="#" class="btn bd-ra"><span class="fa fa-envelope-o"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-phone"></span></a>
						<a href="#" class="btn bd-ra"><span class="fa fa-map-marker"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Welcome to My Salon</span></h2>
					</header>
					<h4><a href="#">Thin It to Win It!</a></h4>
					<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum 
						aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet 
						metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Nullam consectetur orci sed rabitur vel lorem sit amet nulla ullamcorper fermentum. <br><br>
						In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, 
						commodo venenatis eros. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, 
						consectetur adipiscing elit.</p>
					<a href="#" class="btn">more</a>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-3 parallax-block" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Services</span></h2>
					</header>
				</div>
				<div class="grid_6">
					<div class="element"><h3><a href="#">Body Wraps</a></h3></div>
				</div>
				<div class="grid_6">
					<div class="element"><h3><a href="#">Foot Detox</a></h3></div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-5">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>News</span></h2>
					</header>
				</div>
				<div class="grid_4">
					<article>
						<h3><a href="#">November 2014</a></h3>
						<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste.</p>
						<a href="#" class="btn">More</a>
					</article>
				</div>
				<div class="grid_4">
					<article>
						<h3><a href="#">March 2015</a></h3>
						<p>Damus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibust.</p>
						<a href="#" class="btn">More</a>
					</article>
				</div>
				<div class="grid_4">
					<article>
						<h3><a href="#">June 2015</a></h3>
						<p>Jamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuadaonec. </p>
						<a href="#" class="btn">More</a>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
<?php require_once 'includes/footerinc.php'; ?>
<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '34.58333333333333%',
			thumbnails: false,
			pagination: true,
			fx: 'simpleFade',
			loader: 'none',
			hover: false,
			navigation: false,
			playPause: false,
			minHeight: "139px",
		});
	});
</script>
<script>
	$(document).ready(function() {
		$(".owl-carousel").owlCarousel({
			navigation: true,
			pagination: false,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3],
			itemsTablet: [750,1],
			itemsMobile : [479,1],
			navigationText: false
		});
	});
</script>
<script>
	$(document).ready(function() { 
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>
</body>
</html>