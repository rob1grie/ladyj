<?php require_once 'includes/startdocinc.php'; ?>
<?php
$page_title = "Contact Us";
require_once 'includes/headinc-contact.php';

?>
<!-- PHP for processing mail form -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = "";
$name = $email = $message = "";
$isErr = false;
$jsSuccess = 0;
$messageData = array();
$onLoad = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
		$isErr = true;
	}
	else {
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "Only letters and spaces allowed";
			$isErr = true;
		}
		else {
			$messageData['name'] = $name;
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$isErr = true;
	}
	else {
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = "Invalid email format";
			$isErr = true;
		}
		else {
			$messageData['email'] = $email;
		}
	}

	if (empty($_POST["message"])) {
		$messageErr = "Message is required";
		$isErr = true;
	}
	else {
		$message = test_input($_POST["message"]);
		$messageData['message'] = $message;
	}

	if (!$isErr) {
		// Set onLoad event for BODY
		$onLoad = "messageResult()";

		if (send_it($messageData)) {
			$name = $email = $message = "";
			$jsSuccess = 1;
		}
		else {
			$jsSuccess = 0;
		}
	}
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function send_it($data) {
	$to = "robgrie@gmail.com";
	$subject = "A message was sent from a visitor to LadyJBodyWraps.com";
	$mailMessage = "A visitor to LadyJBodyWraps.com has sent you a message:<br><br>";
	$mailMessage .= "Name: " . $data['name'] . "<br>";
	$mailMessage .= "Email: " . $data['email'] . "<br><br>";
	$mailMessage .= "Message:<br>";
	$mailMessage .= $data['message'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "From: " . $data['email'] . "\r\n";

	return mail($to, $subject, $mailMessage, $headers);
}

?>
<body onload="<?php echo $onLoad; ?>">

	<?php require_once 'includes/headerinc.php'; ?>

	<!--=======content================================-->

	<section id="content">
		<div class="full-width-container block-2">
			<div class="container">
				<div class="row">
					<header>
						<h2><span>Contact Information</span></h2>
					</header>

				</div>
				<div class="row">
					<div class="grid_6 preffix_1">
						<div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3342.287436609223!2d-96.68580214961722!3d33.101526374582114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c17406d911967%3A0x6d0b3a7c65a635c7!2s904+W+McDermott+Dr+%23319%2C+Allen%2C+TX+75013!5e0!3m2!1sen!2sus!4v1461279283813" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
							<p>&nbsp;</p>
							<p class="el-1">
								Lady J's Body Wraps and More is located in Allen, TX, on McDermott Dr, just west of US75. You can enter through the back door of the Starbucks building!
							</p>
							<p class="el-2">
								&nbsp;
							</p>
						</div>
						<div class="grid_3 alpha">
							<div class="address">
								<p>Lady J's Body Wraps and More<br>
									904 W. Mc Dermott Dr.<br>
									Bldg.300 Suite 319<br>
									Allen , TX, 75013<br>
								</p>
							</div>
						</div>
						<div class="grid_3">
							<div class="address">
								<p>Telephone: (972) 989-7693</p>
							</div>
						</div>
					</div>
					<div class="grid_5">
						<p>If you wish you can use the form below to send me an email. I'll reply just as soon as I can!</p><br>
						<p><span class="error">* required field.</span></p>
						<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
							<span class="text">Name:</span> 
							<span class="error">* <?php echo $nameErr; ?></span>
							<input type="text" name="name" value="<?php echo $name; ?>">
							<br><br>
							<span class="text">E-mail:</span> 
							<span class="error">* <?php echo $emailErr; ?></span>
							<input type="text" name="email" value="<?php echo $email; ?>">
							<br><br>
							<span class="text">Message:</span> 
							<span class="error">* <?php echo $messageErr; ?></span>
							<textarea name="message" rows="5" cols="40"><?php echo $message; ?></textarea>
							<br><br>
							<input type="submit" name="submit" value="Submit">
						</form>
					</div>
				</div>
				<div class="row">&nbsp;</div>
			</div>
		</div>
	</section>

	<?php require_once 'includes/footerinc.php'; ?>
	<script type="text/javascript">
		function messageResult() {
			var result = "";
			if (<?php echo $jsSuccess; ?>) {
				result = "Your message was sent successfully. You will be hearing from us soon!";
			}
			else {
				result = "There was a problem sending your message. Please try again or contact us through email.";
			}
			alert(result);
		}
	</script>

	<script type="text/javascript">
		google_api_map_init();
		function google_api_map_init() {
			var map;
			var coordData = new google.maps.LatLng(parseFloat(40.650408), parseFloat(-73.950030, 12));
			var markCoord1 = new google.maps.LatLng(parseFloat(40.650408), parseFloat(-73.950030));
			var marker;

			function initialize() {
				var mapOptions = {
					zoom: 14,
					center: coordData,
					scrollwheel: false,
				}

				var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

				marker = new google.maps.Marker({
					map: map,
					position: markCoord1,
				});

				google.maps.event.addDomListener(window, 'resize', function () {
					map.setCenter(coordData);
					var center = map.getCenter();
				});
			}

			google.maps.event.addDomListener(window, "load", initialize);

		}

	</script>
</body>
</html>