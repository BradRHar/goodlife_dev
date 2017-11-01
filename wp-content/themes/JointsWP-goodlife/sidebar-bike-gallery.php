<aside id="sidebar-salebike" class="sidebar medium-3 columns sb-sidebar" role="complementary">

	<?php if ( is_active_sidebar( 'salebike' ) ) : ?>

		<?php dynamic_sidebar( 'salebike' ); ?>

	<?php endif; ?>

	<ul>	
		<?php //WP Query tip thumbnails and titles List
		global $excludes;
		$args2 = array(
				'category_name' => 'gallery-bike',
				'posts_per_page' => '10',
				'orderby' => 'rand',
				'post__not_in' => $excludes,
		);
		$query = new WP_Query( $args2 ); ?>	
		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

		<li>	  		
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?><br>
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</a>
		</li>

		<?php endwhile; endif; wp_reset_postdata(); ?>
	</ul>

<div class="text-center">	
	<a href="<?php echo bloginfo( 'url' ); ?>/category/gallery-bike/">
		<button class="button">&larr; back to Bike Gallery</button>
	</a>
</div>

</aside><!--  end #sidebar-salebike  -->					