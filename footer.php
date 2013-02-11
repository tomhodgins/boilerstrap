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

<!-- BoilerStrap JavaScript Goes Here -->
<script src="http://code.jquery.com/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/keypress-1.0.1.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/boilerstrap.js" type="text/javascript"></script>

</body>
</html>