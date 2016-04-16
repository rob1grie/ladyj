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
				<div class="item" data-src="images/welcome-slide.jpg">
					<div class="camera_caption fadeIn">
						<h3>&nbsp;</h3>
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
				<div class="item" data-src="images/foot-spa-slide.jpg">
					<div class="camera_caption fadeIn">
						<h3>&nbsp;</h3>
					</div>
				</div>
				<div class="item" data-src="images/suero-viv-slide.jpg">
					<div class="camera_caption fadeIn">
						<h3>&nbsp;</h3>
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
					<p class="bold-text larger_text">Hello and welcome to the <span class="pink-text">Lady J's Body Wraps and More</span> website!</p><br>
					<p class="larger_text">I'm so glad you came, because this can be the first step towards a transformed life. Each of our 
						services can result in wonderful changes to how you look and feel, both outside and in. 
						We know that when our health is suffering, so is our overall wellbeing. And it is your overall 
						wellbeing that becomes my sole purpose for you, as we evaluate your needs and begin the journey to 
						your joyful new life!</p><br>
					<p class="larger_text">Please view the <a href="services.php" class="pink_link">services I provide</a>, and see 
						<a href="services.php#testimonials" class="pink_link">what my customers are saying</a>. When you are ready to take the next step towards a new life 
						visit my Style Seat page to schedule an appointment.</p>
					<a href="services.php" class="btn">more</a>
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
				<div class="grid_4">
					<div class="element"><h3><a href="bodywraps.php">Body Wraps</a></h3></div>
				</div>
				<div class="grid_4">
					<div class="element"><h3><a href="footdetox.php">Foot Detox</a></h3></div>
				</div>
				<div class="grid_4">
					<div class="element"><h3><a href="cleanse.php">3 Day Cleanse</a></h3></div>
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