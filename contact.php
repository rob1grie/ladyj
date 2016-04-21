<?php require_once 'includes/startdocinc.php'; ?>
<?php
$page_title = "Contact Us";
require_once 'includes/headinc-contact.php';

?>
<?php require_once 'includes/headerinc.php'; ?>

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
					<form action="mailer.php" method="post" name="form1" id="form1" style="margin:0px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px; width:300px;" onsubmit="MM_validateForm('from', '', 'RisEmail', 'subject', '', 'R', 'verif_box', '', 'R', 'message', '', 'R');
		return document.MM_returnValue">

						Your Name:<br />
						<input name="name" type="text" id="name" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" value="<?php echo $_GET['name']; ?>"/>
						<br />
						<br />

						Your e-mail:<br />
						<input name="from" type="text" id="from" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px; font-family:Verdana, Arial, Helvetica, sans-serif;font-size:11px;" value="<?php echo $_GET['from']; ?>"/>
						<br />
						<br />

						Subject:<br />
						<input name="subject" type="text" id="subject" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;" value="<?php echo $_GET['subject']; ?>"/>
						<br />
						<br />

						Type verification image:<br />
						<input name="verif_box" type="text" id="verif_box" style="padding:2px; border:1px solid #CCCCCC; width:180px; height:14px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"/>
						<img src="verificationimage.php?<?php echo rand(0, 9999); ?>" alt="verification image, type it in the box" width="50" height="24" align="absbottom" /><br />
						<br />

						<!-- if the variable "wrong_code" is sent from previous page then display the error field -->
						<?php if (isset($_GET['wrong_code']))
						{ ?>
							<div style="border:1px solid #990000; background-color:#D70000; color:#FFFFFF; padding:4px; padding-left:6px;width:295px;">Wrong verification code</div><br /> 
	<?php;
} ?>

						Message:<br />
						<textarea name="message" cols="6" rows="5" id="message" style="padding:2px; border:1px solid #CCCCCC; width:300px; height:100px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px;"><?php echo $_GET['message']; ?></textarea>
						<noscript><a href="http://www.thewebhelp.com" style="display:none;">contact form by thewebhelp</a></noscript>
						<input name="Submit" type="submit" style="margin-top:10px; display:block; border:1px solid #000000; width:100px; height:20px;font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; padding-left:2px; padding-right:2px; padding-top:0px; padding-bottom:2px; line-height:14px; background-color:#EFEFEF;" value="Send Message"/>
					</form>				</div>
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