<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */
?>
  	</div><!-- #main .wrapper -->
  	<footer id="colophon" role="contentinfo">
  		<div class="site-info">
  			<?php if ( is_active_sidebar( 'footer' ) ) : ?>
  				<div class="footer-sidebar" role="complementary">
  					<?php dynamic_sidebar( 'footer' ); ?>
  				</div><!-- #secondary -->
  			<?php endif; ?>
  		</div><!-- .site-info -->
  	</footer><!-- #colophon -->
  </div><!-- #page -->

  <?php wp_footer(); ?>

</body>
</html>