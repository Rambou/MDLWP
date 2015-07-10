<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package MDLWP
 */

?>

	</div><!-- #content -->

		<footer class="mdl-mega-footer">
		  <div class="mdl-mega-footer--middle-section">
		  	<?php dynamic_sidebar( 'footer-1' ); ?>
		  	<?php dynamic_sidebar( 'footer-2' ); ?>
		  	<?php dynamic_sidebar( 'footer-3' ); ?>
		  	<?php dynamic_sidebar( 'footer-4' ); ?>
		  </div>
		  
		   <?php
				$args = array(
			        'theme_location' => 'footer',
			        'menu_class' => 'mdl-mega-footer--link-list',
			        'container_class' => 'mdl-mega-footer--bottom-section',
					
				);

				if (has_nav_menu('footer')) {
				    wp_nav_menu($args);
				}
			?>
		 
		</footer>
		
	</main> <!-- .mdl-layout__content -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>