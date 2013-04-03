<?php
/**
 * Boilerstrap functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 625;

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Boilerstrap supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_setup() {
	/*
	 * Makes Boilerstrap available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Boilerstrap, use a find and replace
	 * to change 'boilerstrap' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'boilerstrap', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'boilerstrap' ) );

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'boilerstrap_setup' );

/**
 * Adds support for a custom header image.
 */
require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Enqueues scripts and styles for front-end.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_scripts_styles() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Adds JavaScript for handling the navigation menu hide-and-show behavior.
	 */
	/* wp_enqueue_script( 'boilerstrap-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0', true ); */
	/*
	 * Removed above navigation.js and replace with wp-bootstrap-navwalker
	 * [https://github.com/twittem/wp-bootstrap-navwalker]
	 *
	 */
	
	/**
	 * Class Name: twitter_bootstrap_nav_walker
	 * GitHub URI: https://github.com/twittem/wp-bootstrap-navwalker
	 * Description: A custom Wordpress nav walker to implement the Twitter Bootstrap 2 (https://github.com/twitter/bootstrap/) dropdown navigation using the Wordpress built in menu manager.
	 * Version: 1.2.2
	 * Author: Edward McIntyre - @twittem
	 * Licence: WTFPL 2.0 (http://sam.zoy.org/wtfpl/COPYING)
	 */
	
	class twitter_bootstrap_nav_walker extends Walker_Nav_Menu {
		
		/**
		 * @see Walker::start_lvl()
		 * @since 3.0.0
		 *
		 * @param string $output Passed by reference. Used to append additional content.
		 * @param int $depth Depth of page. Used for padding.
		 */
		function start_lvl( &$output, $depth ) {
			$indent = str_repeat( "\t", $depth );
			$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";		
		}
	
		/**
		 * @see Walker::start_el()
		 * @since 3.0.0
		 *
		 * @param string $output Passed by reference. Used to append additional content.
		 * @param object $item Menu item data object.
		 * @param int $depth Depth of menu item. Used for padding.
		 * @param int $current_page Menu item ID.
		 * @param object $args
		 */
	
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			global $wp_query;
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	
			if (strcasecmp($item->title, 'divider')) {
				$class_names = $value = '';
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = ($item->current) ? 'active' : '';
				$classes[] = 'menu-item-' . $item->ID;
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
	
				if ($args->has_children && $depth > 0) {
					$class_names .= ' dropdown-submenu';
				} else if($args->has_children && $depth === 0) {
					$class_names .= ' dropdown';
				}
	
				$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
	
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
	
				$output .= $indent . '<li' . $id . $value . $class_names .'>';
	
				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
				$attributes .= ($args->has_children) 	    ? ' data-toggle="dropdown" data-target="#" class="dropdown-toggle noeffect"' : '';
	
				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= ($args->has_children && $depth == 0) ? ' <span class="caret"></span></a>' : '</a>';
				$item_output .= $args->after;
	
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			} else {
				$output .= $indent . '<li class="divider">';
			}
		}
	
	
		/**
		 * Traverse elements to create list from elements.
		 *
		 * Display one element if the element doesn't have any children otherwise,
		 * display the element and its children. Will only traverse up to the max
		 * depth and no ignore elements under that depth. 
		 *
		 * This method shouldn't be called directly, use the walk() method instead.
		 *
		 * @see Walker::start_el()
		 * @since 2.5.0
		 *
		 * @param object $element Data object
		 * @param array $children_elements List of elements to continue traversing.
		 * @param int $max_depth Max depth to traverse.
		 * @param int $depth Depth of current element.
		 * @param array $args
		 * @param string $output Passed by reference. Used to append additional content.
		 * @return null Null on failure with no changes to parameters.
		 */
	
		function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
			
			if ( !$element ) {
				return;
			}
			
			$id_field = $this->db_fields['id'];
	
			//display this element
			if ( is_array( $args[0] ) ) 
				$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
			else if ( is_object( $args[0] ) ) 
				$args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
			$cb_args = array_merge( array(&$output, $element, $depth), $args);
			call_user_func_array(array(&$this, 'start_el'), $cb_args);
	
			$id = $element->$id_field;
	
			// descend only when the depth is right and there are childrens for this element
			if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
	
				foreach( $children_elements[ $id ] as $child ){
	
					if ( !isset($newlevel) ) {
						$newlevel = true;
						//start the child delimiter
						$cb_args = array_merge( array(&$output, $depth), $args);
						call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
					}
					$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
				}
					unset( $children_elements[ $id ] );
			}
	
			if ( isset($newlevel) && $newlevel ){
				//end the child delimiter
				$cb_args = array_merge( array(&$output, $depth), $args);
				call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
			}
	
			//end this element
			$cb_args = array_merge( array(&$output, $element, $depth), $args);
			call_user_func_array(array(&$this, 'end_el'), $cb_args);
		}
	}
	
	/**
	 * END Class Name: twitter_bootstrap_nav_walker
	 */

	/*
	 * Loads our main stylesheet.
	 */
	wp_enqueue_style( 'boilerstrap-style', get_stylesheet_uri() );

	/*
	 * Loads the Internet Explorer specific stylesheet.
	 */
	wp_enqueue_style( 'boilerstrap-ie', get_template_directory_uri() . '/css/ie.css', array( 'boilerstrap-style' ), '20121010' );
	$wp_styles->add_data( 'boilerstrap-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'boilerstrap_scripts_styles' );

/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since Boilerstrap 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function boilerstrap_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'boilerstrap' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'boilerstrap_wp_title', 10, 2 );

/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'boilerstrap_page_menu_args' );

/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'boilerstrap' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'boilerstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Mobile-only Sidebar', 'boilerstrap' ),
		'id' => 'sidebar-mobile',
		'description' => __( 'Appears above posts and pages on phones', 'boilerstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'boilerstrap' ),
		'id' => 'footer',
		'description' => __( 'Appears at the bottom of all page templates', 'boilerstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s row-fluid">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'boilerstrap' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'boilerstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'boilerstrap' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'boilerstrap' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'boilerstrap_widgets_init' );

if ( ! function_exists( 'boilerstrap_content_nav' ) ) :
/**
 * Displays navigation to next/previous pages when applicable.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_content_nav( $html_id ) {
	global $wp_query;

	$html_id = esc_attr( $html_id );

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $html_id; ?>" class="navigation" role="navigation">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'boilerstrap' ); ?></h3>
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'boilerstrap' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'boilerstrap' ) ); ?></div>
		</nav><!-- #<?php echo $html_id; ?> .navigation -->
	<?php endif;
}
endif;

if ( ! function_exists( 'boilerstrap_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own boilerstrap_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'boilerstrap' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'boilerstrap' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'boilerstrap' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'boilerstrap' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'boilerstrap' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'boilerstrap' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'boilerstrap' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;

if ( ! function_exists( 'boilerstrap_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own boilerstrap_entry_meta() to override in a child theme.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'boilerstrap' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'boilerstrap' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'boilerstrap' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'boilerstrap' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'boilerstrap' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'boilerstrap' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/**
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Boilerstrap 1.0
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function boilerstrap_body_class( $classes ) {
	$background_color = get_background_color();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'boilerstrap-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'boilerstrap_body_class' );

/**
 * Adjusts content_width value for full-width and single image attachment
 * templates, and when there are no active widgets in the sidebar.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_content_width() {
	if ( is_page_template( 'page-templates/full-width.php' ) || is_attachment() || ! is_active_sidebar( 'sidebar-1' ) ) {
		global $content_width;
		$content_width = 960;
	}
}
add_action( 'template_redirect', 'boilerstrap_content_width' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since Boilerstrap 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
function boilerstrap_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'boilerstrap_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Boilerstrap 1.0
 */
function boilerstrap_customize_preview_js() {
	wp_enqueue_script( 'boilerstrap-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'boilerstrap_customize_preview_js' );

/**
 * Add the ability to use the temaplate file structure for single-{category-slug}.php
 */
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

/**
 * Replaces the image that shows up on the WordPress admin login page
 */
  add_filter( 'login_headerurl', 'boilerstrap_login_headerurl' );
  /**
  * Replaces the login header logo URL
  *
  * @param $url
  */
  function boilerstrap_login_headerurl( $url ) {
     $url = home_url( '/' );
     return $url;
  }
  
  add_filter( 'login_headertitle', 'boilerstrap_login_headertitle' );
  /**
  * Replaces the login header logo title
  *
  * @param $title
  */
  function boilerstrap_login_headertitle( $title ) {
     $title = get_bloginfo( 'name' );
     return $title;
  }
  
  add_action( 'login_head', 'boilerstrap_login_style' );
  /**
  * Replaces the login header logo
  */
  function boilerstrap_login_style() {
     echo '<style>'.PHP_EOL;
     echo '  .login h1 a {'.PHP_EOL;
     echo '    background-image: url( ' . get_template_directory_uri() . '/img/logo.png ) !important;'.PHP_EOL;
     echo '  }'.PHP_EOL;
     echo '</style>'.PHP_EOL;
  }
  
/**
 * Add Custom Backend Favicon
 *
function boilerstrap_admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/img/ico/favicon-admin.png" />';
}
add_action('admin_head', 'boilerstrap_admin_favicon');

*/
 
/**
 * Only users that can update plugins see WordPress update notices
 */        
 
global $user_login;
get_currentuserinfo();
if (!current_user_can('update_plugins')) { // checks to see if current user can update plugins 
 add_action( 'init', create_function( '$a', "remove_action( 'init', 'wp_version_check' );" ), 2 );
 add_filter( 'pre_option_update_core', create_function( '$a', "return null;" ) );
}

/**
 * Sharpen resized JPG's so they don't get blurry
 */
 
function boilerstrap_sharpen_resized_files( $resized_file ) {

   $image = wp_load_image( $resized_file );
   if ( !is_resource( $image ) )
       return new WP_Error( 'error_loading_image', $image, $file );

   $size = @getimagesize( $resized_file );
   if ( !$size )
       return new WP_Error('invalid_image', __('Could not read image size'), $file);
   list($orig_w, $orig_h, $orig_type) = $size;

   switch ( $orig_type ) {
       case IMAGETYPE_JPEG:
           $matrix = array(
               array(-1, -1, -1),
               array(-1, 16, -1),
               array(-1, -1, -1),
           );

           $divisor = array_sum(array_map('array_sum', $matrix));
           $offset = 0; 
           imageconvolution($image, $matrix, $divisor, $offset);
           imagejpeg($image, $resized_file,apply_filters( 'jpeg_quality', 90, 'edit_image' ));
           break;
       case IMAGETYPE_PNG:
           return $resized_file;
       case IMAGETYPE_GIF:
           return $resized_file;
   }

   return $resized_file;
}   

add_filter('image_make_intermediate_size', 'boilerstrap_sharpen_resized_files',900);

/**
 * Removes WordPress version number from <head>
 */
remove_action('wp_head', 'wp_generator');


/**
 * Custom User Profile Fields
 */
 
add_action( 'show_user_profile', 'boilerstrap_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'boilerstrap_show_extra_profile_fields' );

function boilerstrap_show_extra_profile_fields( $user ) { ?>

	<h3>Additional information</h3>

	<table class="form-table">

		<tr>
			<th><label for="userstatus">Status Message</label></th>

			<td>
				<input type="text" name="userstatus" id="userstatus" value="<?php echo esc_attr( get_the_author_meta( 'userstatus', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Add a status message</span>
			</td>
		</tr>

		<tr>
			<th><label for="jobtitle">Job Title</label></th>

			<td>
				<input type="text" name="jobtitle" id="jobtitle" value="<?php echo esc_attr( get_the_author_meta( 'jobtitle', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Add your job title</span>
			</td>
		</tr>
		
    <tr>
    	<th><label for="location">Location</label></th>
    
    	<td>
    		<input type="text" name="location" id="location" value="<?php echo esc_attr( get_the_author_meta( 'location', $user->ID ) ); ?>" class="regular-text" /><br />
    		<span class="description">Enter your location</span>
    	</td>
    </tr>
    
    <tr>
    	<th><label for="twitter">Twitter Username</label></th>
    
    	<td>
    		<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
    		<span class="description">Enter your twitter username, i.e. <span style="color: #999;">http://twitter.com/<span><span style="color: #37a42c; margin-left: 2px;">username</span></span>
    	</td>
    </tr>
    
    <tr>
    	<th><label for="facebook">Facebook Account</label></th>
    
    	<td>
    		<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
    		<span class="description">Enter the link to your Facebook profile, i.e. <span style="color: #37a42c;">http://facebook.com/username</span></span>
    	</td>
    </tr>
    
    <tr>
    	<th><label for="googleplus">Google+</label></th>
    
    	<td>
    		<input type="text" name="googleplus" id="googleplus" value="<?php echo esc_attr( get_the_author_meta( 'googleplus', $user->ID ) ); ?>" class="regular-text" /><br />
    		<span class="description">Enter the link to your Google+ profile, i.e. <span style="color: #37a42c;">https://plus.google.com/u/0/115446181846707482550</span></span>
    	</td>
    </tr>
    
    <tr>
    	<th><label for="skype">Skype Username</label></th>
    
    	<td>
    		<input type="text" name="skype" id="skype" value="<?php echo esc_attr( get_the_author_meta( 'skype', $user->ID ) ); ?>" class="regular-text" /><br />
    		<span class="description">Enter your Skype username</span>
    	</td>
    </tr>
    
    <tr>
    	<th><label for="linkedin">LinkedIN Profile</label></th>
    
    	<td>
    		<input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
    		<span class="description">Enter the link to your LinkedIN profile, i.e. <span style="color: #37a42c;">http://www.linkedin.com/in/tomhodgins</span></span>
    	</td>
    </tr>
    
    <tr>
    	<th><label for="youtube">YouTube Channel</label></th>
    
    	<td>
    		<input type="text" name="youtube" id="youtube" value="<?php echo esc_attr( get_the_author_meta( 'youtube', $user->ID ) ); ?>" class="regular-text" /><br />
    		<span class="description">Enter the link to your YouTube channel, i.e. <span style="color:  #37a42c;">http://www.youtube.com/user/howtobasic</span></span>
    	</td>
    </tr>

	</table>
<?php }

add_action( 'personal_options_update', 'boilerstrap_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'boilerstrap_save_extra_profile_fields' );

function boilerstrap_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
	update_usermeta( $user_id, 'userstatus', $_POST['userstatus'] );
	update_usermeta( $user_id, 'jobtitle', $_POST['jobtitle'] );
	update_usermeta( $user_id, 'location', $_POST['location'] );
  update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
  update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
  update_usermeta( $user_id, 'googleplus', $_POST['googleplus'] );
  update_usermeta( $user_id, 'skype', $_POST['skype'] );
  update_usermeta( $user_id, 'linkedin', $_POST['linkedin'] );
  update_usermeta( $user_id, 'youtube', $_POST['youtube'] );
	
}

// Remove Contact Methods
function boilerstrap_remove_contactmethods( $contactmethods ) {
  
	unset($contactmethods['aim']);
	unset($contactmethods['yim']);
	unset($contactmethods['jabber']);

	return $contactmethods;
}
add_filter('user_contactmethods','boilerstrap_remove_contactmethods',10,1);

/**
 * Adds current author widget only on single pages
 *
 
 <div class="author-info">
 	<div class="author-avatar">
 		<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'boilerstrap_author_bio_avatar_size', 68 ) ); ?>
 	</div><!-- .author-avatar -->
 	<div class="author-description">
 		<h2><?php printf( __( 'About %s', 'boilerstrap' ), get_the_author() ); ?></h2>
 		<p><?php the_author_meta( 'description' ); ?></p>
 		<div class="author-link">
 			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
 				<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'boilerstrap' ), get_the_author() ); ?>
 			</a>
 		</div><!-- .author-link	-->
 	</div><!-- .author-description -->
 </div><!-- .author-info -->
 
*/

/**
 * Custom Admin CSS
 */
 function boilerstrap_customAdmin() {
     $url = get_settings('siteurl');
     $url = $url . '/wp-content/themes/boilerstrap/css/admin-styles.css';
     echo '<link rel="stylesheet" type="text/css" href="' . $url . '" />';
 }
 add_action('admin_head', 'boilerstrap_customAdmin');