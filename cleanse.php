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
				<div class="grid_12">
					<header>
						<h2><span>Three-Day Cleanse</span></h2>
					</header>
				</div>
<!--				<div class="grid_4">
					<div class="img_container"><img src="images/jessie.jpg" alt="img"></div>
				</div>-->
				<div class="grid_12">
					<div class="img_container float_left_img border_right_bottom">
						<img src="images/suero-img.png" />
					</div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p><br>
					<p>
						Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. 
					</p><br>
					<p>
						Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus. In convallis tellus a mauris. Curabitur non elit ut libero tristique sodales. Mauris a lacus. Donec mattis semper leo. In hac habitasse platea dictumst. Vivamus facilisis diam at odio. Mauris dictum, nisi eget consequat elementum, lacus ligula molestie metus, non feugiat orci magna ac sem. Donec turpis. Donec vitae metus. Morbi tristique neque eu mauris. Quisque gravida ipsum non sapien. Proin turpis lacus, scelerisque vitae, elementum at, lobortis ac, quam. Aliquam dictum eleifend risus. In hac habitasse platea dictumst. Etiam sit amet diam. Suspendisse odio. Suspendisse nunc. In semper bibendum libero.
					</p>

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