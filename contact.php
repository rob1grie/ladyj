<?php require_once 'includes/startdocinc.php'; ?>
<?php
$page_title = "Contact Us";
require_once 'includes/headinc-contact.php';

?>
<!-- PHP for processing mail form -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $messageErr = $cbErr = "";
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

	if (!isset($_POST["vcb"])) {
		$cbErr = "Confirmation is required";
		$isErr = true;
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
	$to = "info@ladyjbodywraps.com";
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
					<div class="grid_5 preffix_1">
						<div>
							<div class="center_img"><img src="images/a_dream_is_a_wish.jpg"/></div><p>&nbsp;</p>
							<p class="el-1">
								Lady J's Body Wraps and More will serve you at your home or mine. 
								<a href="https://www.styleseat.com/v/jessiemayberry?utm_campaign=579998&utm_medium=Widgets&utm_source=Badges&utm_content=button" target="_blank">
									Please visit my Style Seat page to schedule an appointment</a>, or call if you 
									have any questions at all!
							</p>
							<p class="el-2">
								&nbsp;
							</p>
						</div>
						<div class="grid_7 alpha">
							<div class="address">
								<p>Lady J's Body Wraps and More</p>
								<p>Serving the McKinney and Allen areas</p>
								<p>Call for appointment: 408-513-4375</p>							
							</div>
						</div>
					</div>
					<div class="grid_5">
						<p>You can use the form below to send me an email. I'll reply just as soon as I can!</p><br>
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
							<span class="text">

								Please confirm that you are a person:</span>
							<div id="cb"  style="display: inline"></div>
							<script type="text/javascript">
								var myDiv = document.getElementById("cb");
								var checkbox = document.createElement("input");
								checkbox.setAttribute("type", "checkbox");
								checkbox.setAttribute("name", "vcb");
								checkbox.setAttribute("value", "1");
								myDiv.appendChild(checkbox);
								//do this after you append it
								checkbox.checked = false;
							</script> <span class="error">*<br> <?php echo $cbErr; ?></span>
							<br>
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

</body>
</html>