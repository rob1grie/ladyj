<?php require_once 'includes/startdocinc.php'; ?>
<?php 
$page_title = "About Us";
require_once 'includes/headinc.php'; 
?>
<?php require_once 'includes/headerinc.php'; ?>

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>About Me</span></h2>
					</header>
				</div>
				<div class="grid_4">
					<div class="img_container border_right_bottom"><img src="images/jessie.jpg" alt="img"></div><p>&nbsp;</p>
				</div>
				<div class="grid_7 preffix_1">
					<p>Hello my name is Jessie, I have been working in the health care field for over 10 years. 
						I take much pride in caring for my clients. After working in the industry for a number of years, 
						dealing with the stress and lack of "me" time, I have come to the realization that it is very 
						important, not only for my health but for my total well-being. After watching my daughter compete 
						and win many fitness competitions, I realized that a healthy lifestyle was attainable at any age 
						and started my own personal health journey. At the same time I wanted to allow others to become 
						aware of the importance of maintaining a healthy lifestyle.</p><br>
					<p>Whether it be taking a moment to relax in a pleasant atmosphere, or taking time to exercise and 
						start losing excess inches to achieve a fuller life, Lady J will provide a pleasant atmosphere 
						and give you guidance on how to maintain your healthy lifestyle. So come in and give the "Body 
						Wraps" a try and be ready to relax!</p>
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