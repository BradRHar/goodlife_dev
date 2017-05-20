<div id="sidebar-social">
	<?php // to make a new sidebar, edit this with the newly registered sidebar id (in assets/functions/sidebars.php)
	if ( is_active_sidebar( 'social' ) ) : ?>
		<?php dynamic_sidebar( 'social' ); ?>
	<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->				
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
</div>