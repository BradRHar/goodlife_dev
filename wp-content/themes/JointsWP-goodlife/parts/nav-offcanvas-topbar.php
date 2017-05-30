<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up. Components below listed left to right, Desktop to Mobile. -->

<div class="top-bar" id="top-bar-menu">

		<!-- Site Identity -->
	<div class="text-center">
<a href="<?php echo home_url(); ?>">GLB Logo Here</a>
	</div>

	<!-- Social Media Widget -->
	<div class="top-bar-left float-left">
		<?php get_sidebar('social'); ?>
	</div>



	<!-- Desktop Nav -->
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>

    <!-- Mobile Menu Toggle -->
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>

</div><!-- end #top-bar-menu -->


