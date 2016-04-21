<?php require_once 'includes/startdocinc.php'; ?>
<?php
$page_title = "Contact Us";
require_once 'includes/headinc-contact.php';

?>
<?php require_once 'includes/headerinc.php'; ?>
<!-- PHP for processing mail form -->
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["name"]))
	{
		$nameErr = "Name is required";
	}
	else
	{
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/", $name))
		{
			$nameErr = "Only letters and spaces allowed";
		}
	}

	if (empty($_POST["email"]))
	{
		$emailErr = "Email is required";
	}
	else
	{
		$email = test_input($_POST["email"]);
		// check if e-mail address is well-formed
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "Invalid email format";
		}
	}

	if (empty($_POST["comment"]))
	{
		$comment = "";
	}
	else
	{
		$comment = test_input($_POST["comment"]);
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Our Locations</span></h2>
					</header>
					<div class="content_map">
						<div class="google-map-api"> 
							<div id="map-canvas" class="gmap"></div> 
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_5">
					<p><span class="error">* required field.</span></p>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
						Name: <input type="text" name="name" value="<?php echo $name; ?>">
						<span class="error">* <?php echo $nameErr; ?></span>
						<br><br>
						E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
						<span class="error">* <?php echo $emailErr; ?></span>
						<br><br>
						Website: <input type="text" name="website" value="<?php echo $website; ?>">
						<span class="error"><?php echo $websiteErr; ?></span>
						<br><br>
						Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
						<br><br>
						Gender:
						<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>  value="female">Female
						<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>  value="male">Male
						<span class="error">* <?php echo $genderErr; ?></span>
						<br><br>
						<input type="submit" name="submit" value="Submit">
					</form>
				</div>
				<div class="grid_6 preffix_1">
					<div>
						<hader>
							<h2><span>Contact Information</span></h2>
						</hader>
						<p class="el-1">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel
						</p>
						<p class="el-2">
							24/7 support is on for all <a href="#">premium themes.</a> <br><br>
							<a href="#">TemplateTuning</a> will help you with customization of any chosen template. <br><br>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique rhoncuseri tym. 
						</p>
					</div>
					<div class="grid_3 alpha">
						<div class="address">
							<p>The Company Name Inc. <br>9870 St Vincent Place, <br>Glasgow, DC 45 Fr 45.</p>
						</div>
					</div>
					<div class="grid_3">
						<div class="address">
							<p>Telephone:+1 800 603 6035 <br>FAX:+1 800 889 9898 <br>E-mail: <a href="mailto:mail@demolink.org" class="mail">mail@demolink.org</a></p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<?php require_once 'includes/footerinc.php'; ?>

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