				<footer class="footer" role="contentinfo">
					<div id="inner-footer">
						<div class="row">
							<nav class="small-12 medium-6 columns" role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
							<div id="sidebar-social" class="sidebar small-12 medium-6 columns">

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
	    				</div>
						<div class="row text-center">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->