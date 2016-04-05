<?php
// Get current script name to set li class
$current = $_SERVER['PHP_SELF'];
$page_title = '';
$index_class = $about_class = $projects_class = $services_class = $contact_class = '';

switch ($current) {
	case '/index.php':
		$index_class = 'current';
		$page_title = "Home Page | Welcome!";
		break;
	case '/about.php':
		$about_class = 'current';
		$page_title = "About Us";
		break;
	case '/projects.php':
		$projects_class = 'current';
		$page_title = "Projects";
		break;
	case '/services.php':
		$services_class = 'current';
		$page_title = "Our Services";
		break;
	case '/contact.php':
		$contact_class = 'current';
		$page_title = "Contact Us";
		break;
}

?>

<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<h1>
						<a href="index.php">
							<img src="images/logo_175x88.png" alt="logo" />
							<span>Body Wraps and More</span>
						</a>
					</h1>
					<nav>
						<ul class="sf-menu">
							<li class="<?php echo $index_class; ?>"><a href="index.php">Home</a>
								<!--								<ul>
																	<li><a href="#">Home menu 1</a></li>
																	<li><a href="#">Home menu 2</a>
																		<ul>
																			<li><a href="#">Home menu 2a</a></li>
																			<li><a href="#">Home menu 2b</a></li>
																			<li><a href="#">Home menu 2c</a></li>
																		</ul>
																	</li>
																	<li><a href="#">Home menu 3</a></li>
																</ul>-->
							</li>
							<li class="<?php echo $about_class; ?>"><a href="about.php">About</a></li>
							<!--<li class="<?php echo $projects_class; ?>"><a href="projects.php">Projects</a></li>-->
							<li class="<?php echo $services_class; ?>"><a href="services.php">Services</a></li>
							<li class="<?php echo $contact_class; ?>"><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
