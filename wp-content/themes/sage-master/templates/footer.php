<footer class="content-info main-footer">
	<!--   <div class="container">
		<?php dynamic_sidebar('sidebar-footer'); ?>
	</div> -->
	<div class="container">
		<div class="clearfix">
			<div class="col-sm-4">
				<div class="logo">
				<a href="/"><img src="/wp-content/themes/sage-master/assets/images/logo.png" alt=""></a>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint distinctio unde ipsum, ex earum impedit dolorum blanditiis, deleniti officiis facilis quis quo eveniet illo tempora odit dolor, saepe commodi quibusdam?</p>
				<div class="address">
					<p>888 Hall Street, Sydney, NSW 2060</p>
					<p><a href="tel:+613423234923">+61 (342)-(323)-4923</a></p>
					<p>Mon-Sat 8.00 - 18.00, Sunday closed</p>
				</div>
			</div>
			<div class="col-sm-4">
				<h1>Recent Post</h1>
				<ul class="recent-post">
					<?php
						$args = array( 'numberposts' => '4' );
						$recent_posts = wp_get_recent_posts( $args );
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> <div class="date">' . mysql2date('M j,Y', $recent["post_date"]) . '</div></li> ';
						}
					?>
				</ul>
			</div>
			<div class="col-sm-4">
				<h1>Contact Us</h1>
				<?php wd_contact_form_maker(13); ?>
			</div>
		</div>
	</div>
	<div class="nav-siteinfo footer">
		<nav class="clearfix">
			<div class="container">
				<ul class="col-sm-4 col-xs-5 nav-siteinfo--details no-padding">
					<li><span class="white">Copyright 2016</span> <a href="/"> © Divorce Pty</a></li>
				</ul>
				<ul class="col-sm-4 col-xs-7 nav-siteinfo--details center-align no-padding">
					<li><a href="#">Security</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Terms of Use</a></li>
				</ul>
				<ul class="col-sm-4 right-align follow-us no-padding">
					<li><span class="white">Follow Us</span></li>
					<li><a href="twitter" class="social-media"><i class="fa fa-twitter"></i></a></li>
					<li><a href="instagram" class="social-media"><i class="fa fa-instagram"></i></a></li>
					<li><a href="Facebook" class="social-media"><i class="fa fa-facebook"></i></a></li>
					<li><a href="Gplus" class="social-media"><i class="fa fa-google-plus "></i></a></li>
				</ul>
			</div>
		</nav>
	</div>
</footer>