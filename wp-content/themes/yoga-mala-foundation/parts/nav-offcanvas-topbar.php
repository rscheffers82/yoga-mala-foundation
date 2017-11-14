<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-right float-right show-for-mobile-down">
		<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/ymf-logo.svg'; ?>" alt="Yoga Mala Foundation Logo"/></a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php
		if (is_page_template('homepage.php')) {
				homepage_top_nav();
		}
		else {
			joints_top_nav();
		} ?>
	</div>
</div>