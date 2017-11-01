<!-- By default, this menu will use off-canvas for small
	 and a topbar for large-up. Components below listed left to right, Desktop to Mobile. -->

<div class="row">
	<div class="top-bar" id="top-bar-menu">

		<!-- Site Identity -->
		<div class="text-center">
			<a href="<?php echo home_url(); ?>"><div class="sitelogo"><?php get_template_part( 'assets/images/sitelogo'); ?></div></a>
		</div>

		<!-- Social Media Widget -->
		<div class="top-bar-left float-left">
			<?php get_sidebar('social'); ?>
		</div>

		<!-- Desktop Nav -->
		<div class="top-bar-right show-for-large">
			<?php joints_top_nav(); ?>	
		</div>

	    <!-- Mobile Menu Toggle -->
		<div class="top-bar-right hide-for-large btn-mobile-nav">
			<button class="list-container" data-toggle="off-canvas"><span class="fi-list"></span></button>
			<a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a>
		</div>

	</div><!-- end #top-bar-menu -->
</div>