				<footer class="footer" role="contentinfo">
					<div id="inner-footer">
						
						<div class="row">
							<div class="sidebar small-12 medium-3 columns marg">
								<?php get_sidebar('footer1'); ?>
							</div>
							<div class="sidebar small-12 medium-3 columns marg">
								<?php get_sidebar('footer2'); ?>
							</div>
							<div class="sidebar small-12 medium-3 columns marg">
								<?php get_sidebar('footer3'); ?>
							</div>
							<div class="sidebar small-12 medium-3 columns marg">
								<?php get_sidebar('social'); ?>
							</div>
	    				</div>

						<div class="row">
							<nav class="small-12 medium-6 columns" role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
							<div class="small-12 medium-6 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
							</div>
						</div>

					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->