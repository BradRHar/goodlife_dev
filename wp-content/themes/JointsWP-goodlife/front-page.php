<?php get_header(); ?>

<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="small-12 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- intro loop -->
					
				<section class="intro" itemprop="articleBody">
					<?php the_content(); ?>
				</section>

				<?php endwhile; endif; ?><!-- end intro loop -->

				<?php get_template_part( 'parts/home', 'sections' ); ?>
			
		</main> <!-- end #main -->  
	</div> <!-- end #inner-content -->  
</div> <!-- end #content -->

<?php get_footer(); ?>