<!-- Bike Gallery Section -->
<section class="row marg">

	<?php 
	$args = array(
		'category_name'=>'gallery-bike',
		'posts_per_page'=>3,
		);
	$query = new WP_Query( $args ); ?>	
		
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="small-12 medium-4 column">
			<a href="<?php the_permalink(); ?>">
				<div class="card">
					<div class="card-section">
						<?php the_post_thumbnail( 'medium' ); ?>
					</div>
					<div class="card-section text-center">
						<?php the_title('<h4>', '</h4>'); ?>
					</div>
				</div>
			</a>
		</div>

	<?php endwhile; ?>

	<div class="small-12 column text-center marg">
		<a href="<?php echo bloginfo('url'); ?>/category/gallery-bike/">
			<button class="button">View More Bikes ></button>
		</a>
	</div>

	<?php endif; wp_reset_postdata(); ?>

</section>

<!-- News Section -->
<section class="marg">

	<?php 
	$counter = 1;
	$args = array(
		'category_name'=>'news',
		'posts_per_page'=>4,
		);
	$query = new WP_Query( $args ); ?>	
		
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

	<div class="row">	

		<div class="small-12 medium-6 column news-image <?php if ($counter % 2 == 1){echo 'float-left';}else if ($counter % 2 == 0){echo 'float-right';} ?>">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>

		<div class="small-12 medium-6 column pad <?php if ($counter % 2 == 1){echo 'float-right';}else if ($counter % 2 == 0){echo 'float-left';} ?>">

			<p class="byline"><?php the_time('F j, Y'); ?></p> 
			<h3><?php the_title(); ?></h3>
			<p><?php the_excerpt(); ?></p>
			<a href="<?php the_permalink(); ?>"> <button class="button">Read More ></button> </a>

		</div>

	</div>

		<?php $counter++ ; endwhile; ?>

	<div class="small-12 column text-center marg">
		<a href="<?php echo bloginfo('url'); ?>/category/news/">
			<button class="button">View Older Posts ></button>
		</a>
	</div>

	<?php endif; wp_reset_postdata(); ?>

</section>

<!-- Partners Section -->
<section class="column row marg text-center">
	<h2 class="friends">Our Friends and Supporters</h2>

	<div class="row small-up-2 medium-up-4">

	<?php 
	$args = array(
		'category_name'=>'partner',
		);
	$query = new WP_Query( $args ); ?>	
		
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="column column-block">
			<?php the_content(); ?>
		</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>

	</div><!-- end block grid -->
</section>