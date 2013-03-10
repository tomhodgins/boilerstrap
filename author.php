<?php
/**
 * The template for displaying Author Archive pages.
 *
 * Used to display archive-type pages for posts by an author.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header(); ?>

  <section id="primary" class="site-content">
    <div id="content" role="main">

    <?php if ( have_posts() ) : ?>

      <?php
        /* Queue the first post, that way we know
         * what author we're dealing with (if that is the case).
         *
         * We reset this later so we can run the loop
         * properly with a call to rewind_posts().
         */
        the_post();
      ?>

      <?php
        /* Since we called the_post() above, we need to
         * rewind the loop back to the beginning that way
         * we can run the loop properly, in full.
         */
        rewind_posts();
      ?>

      <?php boilerstrap_content_nav( 'nav-above' ); ?>

      <?php
      // If a user has filled out their description, show a bio on their entries.
      if ( get_the_author_meta( 'description' ) ) : ?>
      <div class="author-info">
      
        <div class="row-fluid">
        
          <div class="author-avatar span3 center">
            <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'boilerstrap_author_bio_avatar_size', 250 ) ); ?>
            <div class="row-fluid">
              <div class="author-actions">
              
                  <?php printf( __( '%s', 'boilerstrap' ), '<a class="btn btn-primary preventDefault" href="#" title="view posts by ' . esc_attr( get_the_author() ) . '" rel="me" data-toggle="collapse" data-target="#author-posts">View Posts</a>' ); ?>
                  <a class="btn" href="mailto:<?php the_author_meta( 'user_email' ); ?>" title="click to send a message to <?php the_author_meta('display_name') ?>">Email</a>
                  
              </div>
            
            </div>
    
          </div><!-- .author-avatar -->
          
          <div class="author-details span9">
          
          <?php get_currentuserinfo();
          
          global $user_ID;
          if (” != $user_ID) { ?>
          
          <a class="btn btn-link author-edit" href="<?php echo home_url( '/' ) ?>wp-admin/user-edit.php?user_id=<?php the_author_ID(); ?>"><i class="icon-pencil"></i> edit</a>
          
          <?php } ?>

              <h1 class="author-title"><?php the_author_meta('display_name') ?></h1>
              <h2 class="author-jobtitle"><?php   the_author_meta( 'jobtitle', $post->post_author ) ?></h2>
              <h2 class="author-location"><?php   the_author_meta( 'location', $post->post_author ) ?></h2>
              
              <div class="author-userstatus"><?php the_author_meta( 'userstatus', $post->post_author ) ?></div>
          
              <ul class="author-profiles">
                <li><a href="http://twitter.com/<?php the_author_meta('twitter', $post->post_author ) ?>" class="twitter"><i class="icon-twitter"></i> @<?php the_author_meta('twitter', $post->post_author ) ?></a></li>
                <li><a href="<?php the_author_meta('facebook', $post->post_author ) ?>" class="facebook"><i class="icon-facebook-sign"></i> Facebook</a></li>
                <li><a href="<?php the_author_meta('googleplus', $post->post_author ) ?>?rel=author" rel="author" class="googleplus"><i class="icon-google-plus-sign"></i> Google+</a></li>
                <li><a href="skype:<?php the_author_meta('skype', $post->post_author ) ?>?chat" class="skype"><i class="icon-skype"></i> <?php the_author_meta('skype', $post->post_author ) ?></a></li>
                <li><a href="<?php the_author_meta('linkedin', $post->post_author ) ?>?chat" class="linkedin"><i class="icon-linkedin-sign"></i> LinkedIN</a></li>
                <li><a href="<?php the_author_meta('youtube', $post->post_author ) ?>?chat" class="youtube"><i class="icon-youtube"></i> YouTube</a></li>
              </ul>
          
              <div class="author-description">
                <h2 class="author-label">Bio</h2>
                <p><?php the_author_meta( 'description' ); ?></p>
              </div><!-- .author-description	-->
            </div>
          
          </div>
          
        </div>
                
      </div><!-- .author-info -->
      <?php endif; ?>

      <div id="author-posts" class="collapse">
        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
  
        <?php boilerstrap_content_nav( 'nav-below' ); ?>
  
      <?php else : ?>
        <?php get_template_part( 'content', 'none' ); ?>
      <?php endif; ?>
    </div>

    </div><!-- #content -->
  </section><!-- #primary -->

<?php get_footer(); ?>