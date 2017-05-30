<?php get_header(); ?>		
<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="small-12 medium-9 columns" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<?php if ( is_single()&& in_category( 'gallery-bike' ) ) {
					get_sidebar('bike-gallery');
				 } else { 
					get_sidebar('sidebar1');
		} ?>

	</div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_footer(); ?>