<article class="row marg" id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">					

	<div class="small-12 medium-6 column">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium'); ?></a>
	</div>
			
	<section class="small-12 medium-6 column entry-content" itemprop="articleBody">
		<header class="article-header">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
		</header> <!-- end article header -->
		<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</section> <!-- end article section -->
				    						
</article> <!-- end article -->