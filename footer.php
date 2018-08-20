<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="inner-footer grid-x grid-margin-x grid-padding-x">
						<div class="small-3 medium-6 large-6 cell">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> LLC. ALL RIGHTS RESERVED UNLESS OTHERWISE STATED.</p>
						</div>
						<div class="small-9 medium-6 large-6 cell">
							<nav role="navigation" class="footer-nav">
								<?php joints_footer_links(); ?>
							</nav>
						</div>
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->