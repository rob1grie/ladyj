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
							<img src="images/logo-187x94.png" alt="logo" />
							<span>Body Wraps and More</span>
						</a>
					</h1>
					<nav>
						<ul class="sf-menu">
							<li class="<?php echo $index_class; ?>"><a href="index.php">Home</a></li>
							<li class="<?php echo $about_class; ?>"><a href="about.php">About</a></li>
							<li class="<?php echo $services_class; ?>"><a href="services.php">Services</a>
								<ul>
									<li><a href="bodywraps.php">Body Wraps</a></li>
									<li><a href="footdetox.php">Foot Detox</a></li>
									<li><a href="cleanse.php">3 Day Cleanse</a></li>
								</ul>
							</li>
							<li class="<?php echo $contact_class; ?>"><a href="contact.php">Contact Us</a>
								<ul>
									<li><a href="contact.php">Contact Us</a></li>
									<li>
										<a href="https://www.styleseat.com/v/jessiemayberry?utm_campaign=579998&utm_medium=Widgets&utm_source=Badges&utm_content=button" target="_blank">
											Schedule an<br>Appointment
										</a>
									</li>
								</ul>								
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>
