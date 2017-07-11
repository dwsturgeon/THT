				<footer class="footer" role="contentinfo">
					<div id="inner-footer" class="row">
						<div class="large-3 medium-3 columns">
							<?php echo(joints_left_footer_links()); ?>
	    				</div>
	    				<div class="large-3 medium-3 columns">
	    					<?php echo(joints_middle_footer_links()); ?>
	    				</div>
	    				<div class="large-3 medium-3 columns">
	    					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
	    				</div>
	    				<div class="large-3 medium-3 columns">
	    					<?php echo(joints_right_footer_links()); ?>
	    				</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->