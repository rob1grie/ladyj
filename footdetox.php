<?php require_once 'includes/startdocinc.php'; ?>
<?php
$page_title = "What Are Body Wraps?";
require_once 'includes/headinc.php';

?>
<?php require_once 'includes/headerinc.php'; ?>
<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12 ">

					<div class="img_container float_right_img border_left_bottom ">
						<img src="images/foot-detox-img.jpg" />
					</div>
					<div class="margin_20_left" >
						<header>
							<h2><span>Ionic Foot Detox</span></h2>
						</header>
						<p>
							The Ionic Cleanse Detox Machine is a high-tech water detoxification system that facilitates 
							the body's ability to heal itself. The Ionic Cleanse Detox Machine is a water foot-bath that 
							utilizes steel electrodes, which cleans, balances, and enhances bio-energy, a vital force present 
							in the body's fluids.
						</p><br>
					</div>
					<div class="margin_20_left">
						<p>The action of the machine is to help your body with:
						</p><br>
						<div class="content_list">
							<ul>
								<li>Less fluid retention</li>
								<li>Reduction in inflammation</li>
								<li>Improved memory</li>
								<li>Improved bladder control</li>
								<li>A more balanced PH</li>
								<li>A stronger immune system</li>
								<li>Significant pain relief, inclusive of, but not limited to Arthritis, gout and headaches</li>
							</ul>
						</div>
						<div>
							<img class="center_img" src="images/detox-colors.jpg">
						</div>
						<p><br>While using the Ionic Cleanse Detox Machine, you will actually see the cleansing process as 
							the water interacts with a compound electric current along with a frequency field structure.</p>
						<div>
							<img class="center_img" src="images/detox-before-after.jpg">
						</div>
						<p>&nbsp;</p>
					</div>
				</div>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</section>

<?php require_once 'includes/footerinc.php'; ?>

<script>
	$(document).ready(function () {
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