<?php
/**
 * Template Name: Demo - Typography Styles
 *
 * Description: This template demos the custom font integration with 
 * Source Sans Pro and the various heading and text styles that we have
 * added to css/typography.css so you can easily style the typography 
 * sitewide by editing only one file.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Boilerstrap
 * @since Boilerstrap 1.0
 */

get_header();
get_sidebar( 'mobile' ); ?>

<div id="primary" class="site-content">
  <div id="content" class="entry-content" role="main">
  
    <!-- Typography Styles -->    
    <h1 class="huge">This is a Huge Headline</h1>
      <div style="margin:20px 0;">
      <h1>This is an &lt;H1&gt; Headline</h1>
      <h2>This is an &lt;H2&gt; Headline</h2>
      <h3>This is an &lt;H3&gt; Headline</h3>
      <h4>This is an &lt;H4&gt; Headline</h4>
      <h5>This is an &lt;H5&gt; Headline</h5>
      <h6>This is an &lt;H6&gt; Headline</h6>
    </div>
    
    <h1 class="page-header">Paragraph Styles</h1>
    <section id="paragraph-styles">
    <p class="intro">&lt;p class="<strong>intro</strong>"&gt; Suspendisse ullamcorper feugiat risus, vulputate lacinia lorem consectetur vitae. Cras dictum nisi consequat leo porttitor quis semper nulla convallis. Aenean varius convallis diam, nec volutpat dolor malesuada vel. Sed posuere consectetur tellus viverra fermentum. Morbi auctor venenatis nisi, vitae vestibulum arcu cursus eu. Donec ultrices, tellus vitae ullamcorper commodo, lectus purus mollis orci, ut viverra lorem nulla a ligula. Fusce ultrices, elit sit amet porta condimentum, arcu ipsum dignissim ante, eu interdum est neque in arcu. Maecenas a elit quis neque pellentesque tempor. Cras scelerisque tortor eu ante iaculis lacinia.</p>
    
    <p>&lt;p&gt; Phasellus commodo metus dolor, eu imperdiet ante. Vestibulum tincidunt lacinia odio, eu faucibus elit rutrum id. Donec ac massa lacus. Duis id eros adipiscing arcu posuere vestibulum. Duis rhoncus dui at metus aliquam vitae eleifend nunc eleifend. Phasellus enim massa, tempor mollis consequat nec, consectetur non libero. Nunc quis adipiscing sapien. Nunc tristique nulla in tellus sodales at commodo dui mollis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum sit amet neque libero. Maecenas vestibulum vulputate rutrum. Maecenas tempus pharetra fermentum. Nulla viverra enim eu nisl volutpat elementum. Curabitur eget varius magna. Sed ullamcorper ullamcorper tempor.</p>
    
    <p class="small">&lt;p class="<strong>small</strong>"&gt; Vivamus consequat luctus augue, eu eleifend urna iaculis vitae. Donec quis sem non sem tempus auctor vel non massa. Donec fringilla congue ipsum vel dapibus. Aenean sed augue ligula, euismod faucibus ante. Proin tempus dictum iaculis. Curabitur enim nisl, eleifend sit amet sagittis in, lacinia eget neque. Morbi sed erat eget nulla tristique pretium. In ullamcorper est sit amet sem condimentum adipiscing dapibus quam luctus. Praesent venenatis eros in urna ornare eu dapibus sapien facilisis. Morbi scelerisque adipiscing nisi lacinia fringilla. Fusce ornare ultricies diam, sed venenatis mi suscipit ac. Proin luctus fringilla turpis, a mattis ligula bibendum eget. Etiam id dui id velit suscipit adipiscing.</p>
    </section>
    
    <h1 class="page-header">Reusable Classes</h1>
    <section id="reusable-classes">
    <p><span class="underline">&lt;span class="<strong>underline</strong>"&gt;underline&lt;/span&gt;</span></p>
    <p><span class="hilite">&lt;span class="<strong>hilite</strong>"&gt;hilite&lt;/span&gt;</span></p>
    <p><code>&lt;code&gt;code&lt;/code&gt;</code></p>
    <p class="mono">&lt;span class="<strong>mono</strong>"&gt;mono&lt;/span&gt;</p>
    <p class="center">&lt;p class="<strong>center</strong>"&gt;center&lt;/p&gt;</p>
    </section>
    
    <h1 class="page-header">Bullet Styles</h1>
    <section id="bullet-styles" style="margin:20px 0 0 0;">
    <div class="row-fluid">
    
    <div class="span4">
      <h3>Miscellaneous</h3>
      <ul class="none">
        <li class="middot">middot</li>
        <li class="triangle">triangle</li>
        <li class="circle-arrow">circle-arrow</li>
        <li class="angle">angle</li>
        <li class="double-angle">double-angle</li>
        <li class="circle">circle</li>
        <li class="circle-blank">circle-blank</li>
        <li class="check">check</li>
        <li class="check-empty">check-empty</li>
        <li class="square">square</li>
      </ul>
    </div>
    
    
    <div class="span4">
      <h3>Checklist</h3>
      <ul class="check-empty">
        <li class="check">task number one</li>
        <li class="check">dont forget to do task 2</li>
        <li class="check">third job</li>
        <li>fourth task</li>
        <li>fifth thing to do today</li>
        <li>remember to do this</li>
        <li>list item</li>
        <li>more things to do</li>
        <li>chores for later</li>
        <li>relax</li>
     </ul>
    </div>
    
    <div class="span4">
      <h3>Unstyled</h3>
      <ul>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
        <li>list item</li>
      </ul>
    </div>
    
    
    </div>
    </section>
  
  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>