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
					<form id="contact-form">
						<div class="contact-form-loader"></div>
							<header>
								<h2><span>Contact Form</span></h2>
							</header>
							<fieldset>
									<label class="name">
										<span class="text">Your Name:</span>
										<input type="text" name="name" placeholder="" value="" data-constraints="@Required @JustLetters" />
											<span class="empty-message">*This field is required.</span>
											<span class="error-message">*This is not a valid name.</span>
									</label>
									<label class="email">
										<span class="text">Your E-mail:</span>
										<input type="text" name="email" placeholder="" value="" data-constraints="@Required @Email" />
										<span class="empty-message">*This field is required.</span>
										<span class="error-message">*This is not a valid email.</span>
									</label>
									<label class="phone">
										<span class="text">Subject:</span>
										<input type="text" name="phone" placeholder="" value="" data-constraints="@Required" />
										<span class="empty-message">*This field is required.</span>
										<span class="error-message">*This is not a valid subject.</span>
									</label>
									<label class="message">
										<span class="text">Message:</span>
										<textarea name="message" placeholder="" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
										<span class="empty-message">*This field is required.</span>
										<span class="error-message">*The message is too short.</span>
									</label>
								<div class="cont_btn">
									<a href="#" data-type="reset" class="btn">Clear</a>
									<a href="#" data-type="submit" class="btn">Send</a>
								</div>
						</fieldset> 
						<div class="modal fade response-message">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Modal title</h4>
									</div>
									<div class="modal-body">
										You message has been sent! We will be in touch soon.
									</div>
								</div>
							</div>
						</div>
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
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(parseFloat(40.650408), parseFloat(-73.950030,12));
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
				map:map,
				position: markCoord1,
			});

			google.maps.event.addDomListener(window, 'resize', function() {
				map.setCenter(coordData);
				var center = map.getCenter();
			});
		}

		google.maps.event.addDomListener(window, "load", initialize); 

	}

</script>
</body>
</html>