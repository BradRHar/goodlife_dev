<!-- Bike Gallery Section -->
<section>
	<div class="row">	

		<?php 
		$args = array(
			'category_name'=>'gallery-bike',
			'posts_per_page'=>3,
			);
		$query = new WP_Query( $args ); ?>	
			
		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="small-12 medium-4 column">
				<a href="<?php the_permalink(); ?>">
					<div class="text-center">
						<?php the_post_thumbnail( 'medium' ); the_title('<h4>', '</h4>'); ?>
					</div>
				</a>
			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>

		<div class="text-center"><a href="<?php get_bloginfo('url');?>/bike-gallery"><button class="button">View More ></button></a></div>

	</div>
</section>

<!-- Partners Section -->
<section>
	<div class="row">	
		<div class="small-12 column text-center">
			<h1>Our Friends and Supporters</h1>
		</div>

		<?php 
		$args = array(
			'category_name'=>'partner',
			);
		$query = new WP_Query( $args ); ?>	
			
		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="small-6 medium-3 column">
				<a href="<?php the_permalink(); ?>">
					<div>
						<?php the_post_thumbnail( 'medium' ); ?>
					</div>
				</a>
			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>
	</div>
</section>

<!-- News Section -->
<section>
		
	<div class="row">
		<div class="small-12 column text-center">
			<h1>What's Happening at Goodlife</h1>
		</div>
	</div>

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

		<div class="small-12 medium-6 column <?php if ($counter % 2 == 1){echo 'float-right';}else if ($counter % 2 == 0){echo 'float-left';} ?>">

			<?php the_time('F j, Y'); the_title(); the_excerpt(); ?>

			<a href="<?php the_permalink(); ?>"> <button class="button">Read More ></button> </a>

		</div>
	</div>

		<?php $counter++ ; endwhile; endif; wp_reset_postdata(); ?>
	
</section>