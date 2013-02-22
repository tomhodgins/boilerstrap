<?php
/**
 * The mobile-only sidebar
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

/*
 * The mobile widget area is triggered when it contains
 * widgets. So let's check that first.
 *
 * If the sidebar doesn't have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'sidebar-mobile' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>
<div id="sidebar-mobile" class="visible-phone" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-mobile' ) ) : ?>
	<div class="sidebar-mobile-widgets">
		<?php dynamic_sidebar( 'sidebar-mobile' ); ?>
	</div><!-- .first -->
	<?php endif; ?>
</div><!-- #secondary -->