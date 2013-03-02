<?php
/**
 * Template Name: Bootstrap Demos
 *
 * Description: This page contains a select number of copy/pastable
 * demos using Bootstrap's built-in styles. Everything you see here
 * is already initialized and ready to use
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
  
    <!-- Bootstrap Demos -->
    <h1 class="huge">Bootstrap styles</h1>
    
    <!--Hero Unit -->
    <h1 class="page-header">hero-unit <small>add class="hero-unit"</small></h1>
    <section id="bootstrap-hero-unit" class="row-fluid">
      <div class="hero-unit" style="margin:20px 0;">
        <h1>I am &lt;div class="hero-unit"&gt;</h1>
        <h3>I am a support headline</h3>
      </div>
    </section>
    
    <!--Buttons -->
    <h1 class="page-header">buttons <small>add class="btn"</small></h1>
    <section id="bootstrap-buttons" class="row-fluid">
      <p class="center" style="margin:20px 0;">
        <a href="#" class="btn preventDefault" style="margin:20px 0">a.btn</a>
        <a href="#" class="btn btn-primary" style="margin:20px 0">a.btn-primary</a>
        <a href="#" class="btn btn-info" style="margin:20px 0">a.btn-info</a>
        <a href="#" class="btn btn-success" style="margin:20px 0">a.btn-success</a>
        <a href="#" class="btn btn-warning" style="margin:20px 0">a.btn-warning</a>
        <a href="#" class="btn btn-danger" style="margin:20px 0">a.btn-danger</a>
        <a href="#" class="btn btn-inverse" style="margin:20px 0">a.btn-inverse</a>
        <a href="#" class="btn btn-link" style="margin:20px 0">a.btn-link</a>
      </p>
      <p class="center" style="margin:20px 0;">
        <a href="#" class="btn btn-primary btn-mini" style="margin:20px 0">a.btn-mini</a>
        <a href="#" class="btn btn-primary btn-small" style="margin:20px 0">a.btn-small</a>
        <a href="#" class="btn btn-primary" style="margin:20px 0">a.btn</a>
        <a href="#" class="btn btn-primary btn-large" style="margin:20px 0">a.btn-large</a>
      </p>
      <p class="center" style="margin:20px 0;">
        <a href="#" class="btn btn-primary btn-block">a.btn-block</a>
        <a href="#" class="btn btn-block">a.btn-block</a>
      </p>
    </section>
    
    <!--Wells -->
    <h1 class="page-header">well <small>add class="well"</small></h1>
    <section id="bootstrap-well" class="row-fluid">
      <p class="well well-small center" style="margin:20px 0;">I am a small well</p>
      <p class="well center" style="margin:20px 0;">I am a well</p>
      <p class="well well-large center" style="margin:20px 0;">I am a large well</p>
    </section>
    
    <!--Scaffolding -->
    <h1 class="page-header">scaffolding</h1>
    <section id="bootstrap-hero-unit" class="row-fluid" style="margin:20px 0;">
      <div class="row-fluid">
        <div class="span6 well center">.span6</div>
        <div class="span6 well center">.span6</div>
      </div>
      <div class="row-fluid">
        <div class="span4 well center">.span4</div>
        <div class="span4 well center">.span4</div>
        <div class="span4 well center">.span4</div>
      </div>
      <div class="row-fluid">
        <div class="span3 well center">.span3</div>
        <div class="span3 well center">.span3</div>
        <div class="span3 well center">.span3</div>
        <div class="span3 well center">.span3</div>
      </div>
      <div class="row-fluid">
        <div class="span2 well center">.span2</div>
        <div class="span2 well center">.span2</div>
        <div class="span2 well center">.span2</div>
        <div class="span2 well center">.span2</div>
        <div class="span2 well center">.span2</div>
        <div class="span2 well center">.span2</div>
      </div>
      <div class="row-fluid">
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
        <div class="span1 well center">1</div>
      </div>
      <div class="row-fluid">
        <div class="span7 offset1 well center">.span7 .offset1</div>
        <div class="span3 offset1 well center">.span3 .offset1</div>
      </div>
      <div class="row-fluid">
        <div class="span12 well center">.span12</div>
      </div>
    </section>
    
    <!-- Tooltip -->
    <h1 class="page-header">tooltips <small>add data-toggle="tooltip" to a link</small></h1>
    <section id="bootstrap-tooltip" class="row-fluid">
      <p>Cras sit amet magna nulla. <a href="#" data-toggle="tooltip" title="Etiam in quam lacus">Pellentesque</a> quis urna urna, sit amet egestas elit. Ut ultricies, lacus id gravida scelerisque, nisi leo blandit neque, in auctor nunc urna ac dolor. Nam sodales iaculis diam. Aliquam ligula sem, <a href="#" data-toggle="tooltip" title="urna turpis">dapibus sed sagittis quis</a>, volutpat blandit ipsum. Integer ornare viverra lacinia. Pellentesque ac risus eget mauris laoreet vehicula sit amet eu lectus. Duis ac dapibus nibh. Nam ut tortor id enim congue imperdiet. Praesent a libero massa. <a href="#" data-toggle="tooltip" title="Aliquam nunc turpis, vestibulum at scelerisque sed, facilisis quis magna. Proin quis turpis quis quam lacinia congue condimentum a libero.">Vivamus</a> elementum pulvinar nisi, at rutrum odio faucibus ac. Integer sed magna lectus. Praesent adipiscing porta felis, vel imperdiet magna rhoncus pharetra. Ut ut magna velit, sed fringilla ante. Nullam accumsan elit in mauris aliquam suscipit non eget nisl. Vivamus massa augue, dignissim ut luctus accumsan, eleifend id nunc.</p>
      <div class="row-fluid">
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="tooltip-left" title="demo text goes here">data-toggle="tooltip-left"</a>
      </div>
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="tooltip" title="demo text goes here">data-toggle="tooltip"</a>
      </div>
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="tooltip-down" title="demo text goes here">data-toggle="tooltip-down"</a>
      </div>
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="tooltip-right" title="demo text goes here">data-toggle="tooltip-right"</a>
      </div>
      </div>
    </section>
    
    <!-- Popovers -->
    <h1 class="page-header">popovers <small>add data-toggle="popover" and data-content="anything" to a link</small></h1>
    <section id="bootstrap-popover" class="row-fluid">
      <p>Curabitur venenatis neque quis nisl <a href="#" data-toggle="popover" title="Sed ornare dignissim" data-content="Proin ultricies risus id libero dignissim malesuada.">malesuada</a> lobortis. Proin interdum erat eu enim elementum sit amet accumsan augue pharetra. Curabitur blandit dolor ut lacus adipiscing eget fermentum nibh mattis. Quisque enim risus, ultricies quis vulputate sed, fringilla vel erat. Vestibulum ac massa nisl. Ut dignissim varius iaculis. Donec magna lorem, consectetur dictum adipiscing congue, aliquet a lacus. Etiam congue mattis quam, eu molestie massa semper nec. <a href="#" data-toggle="popover" title="Praesent imperdiet" data-content="Etiam congue mattis quam, eu molestie massa semper nec. Quisque tempus, nunc ut aliquam blandit, sem dolor aliquam neque, at vulputate nulla tortor at est.">Quisque</a> tempus, nunc ut aliquam blandit, sem dolor aliquam neque, at vulputate nulla tortor at est. Nam commodo ultricies dui vel ullamcorper. Donec viverra fringilla urna, in molestie enim cursus faucibus. Praesent sit amet erat in erat faucibus euismod at non lorem. Vivamus enim risus, <a href="#" data-toggle="popover" title="Vestibulum ac nunc lorem" data-content="Sed ullamcorper nibh vitae tellus commodo eleifend.">consequat</a> sit amet consequat eget, tristique id ligula. Pellentesque lobortis tincidunt est sed scelerisque.</p>
      <div class="row-fluid">
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="popover-left" class="btn" title="Demo Popover Title" data-content="Sample popover content goes here">data-toggle="popover-left"</a>
      </div>
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="popover" class="btn" title="demo text goes here" data-content="Sample popover content goes here">data-toggle="popover"</a>
      </div>
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="popover-down" class="btn" title="demo text goes here" data-content="Sample popover content goes here">data-toggle="popover-down"</a>
      </div>
      <div class="span3 center" style="margin:20px 0">
        <a href="#" data-toggle="popover-right" class="btn"  title="demo text goes here" data-content="Sample popover content goes here">data-toggle="popover-right"</a>
      </div>
      </div>
    </section>
    
    <!-- Tabs -->
    <h1 class="page-header">Tabs</h1>
    <section id="tabs" class="row-fluid">
      <ul class="nav nav-tabs" class="demo-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Home</a></li>
        <li><a href="#profile" data-toggle="tab">Profile</a></li>
        <li><a href="#messages" data-toggle="tab">Messages</a></li>
        <li><a href="#settings" data-toggle="tab">Settings</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade in active" id="home">
          <div class="row-fluid">
            <div class="span4">
              <p>Pellentesque dignissim, neque eu tempus vestibulum, tortor purus vestibulum elit, vulputate laoreet nulla elit a mauris. In ligula dolor, tincidunt id eleifend ut, cursus nec lacus. Duis cursus viverra lorem quis condimentum.</p>
            </div>
            <div class="span4">
              <p>Quisque vehicula nisl sit amet nisi aliquet tincidunt. Nullam ultrices, erat eget convallis congue, justo nunc condimentum dui, at adipiscing mauris leo ut lectus. Quisque accumsan mi eu odio vestibulum vel eleifend arcu pretium.</p>
            </div>
            <div class="span4">
              <p>Curabitur adipiscing, lacus eu mollis vulputate, nibh arcu venenatis dui, non vulputate libero felis quis ante. Nunc eros justo, varius at pharetra ut, lacinia consequat diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade in" id="profile">
          <div class="row-fluid">
            <div class="span12">
              <p>Pellentesque dignissim, neque eu tempus vestibulum, tortor purus vestibulum elit, vulputate laoreet nulla elit a mauris. In ligula dolor, tincidunt id eleifend ut, cursus nec lacus. Duis cursus viverra lorem quis condimentum.</p>
              <p>Quisque vehicula nisl sit amet nisi aliquet tincidunt. Nullam ultrices, erat eget convallis congue, justo nunc condimentum dui, at adipiscing mauris leo ut lectus. Quisque accumsan mi eu odio vestibulum vel eleifend arcu pretium.</p>
              <p>Curabitur adipiscing, lacus eu mollis vulputate, nibh arcu venenatis dui, non vulputate libero felis quis ante. Nunc eros justo, varius at pharetra ut, lacinia consequat diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade in" id="messages">
          <div class="row-fluid">
            <div class="span4">
              <p>Nunc vel massa nec nibh rutrum consequat. Curabitur tristique, nisi id mattis blandit, nibh massa rhoncus lacus, nec fermentum eros mi vitae mauris. Morbi fringilla dictum pulvinar.</p>
            </div>
            <div class="span4">
              <p>Proin ac risus eros, laoreet aliquam sapien. Vestibulum blandit fermentum turpis, id auctor sapien lobortis nec. Phasellus condimentum cursus velit, ac malesuada nulla volutpat vitae. Morbi semper mi nulla. Nulla id fringilla augue.</p>
            </div>
            <div class="span4">
              <p>Duis scelerisque egestas nunc, sit amet condimentum neque hendrerit vitae. Pellentesque pellentesque facilisis ultrices. Sed ac mi tellus, eget fringilla urna. Nunc id ipsum ut erat tempor ultrices vitae eu enim.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade in" id="settings">
          <div class="row-fluid">
            <div class="span12">
              <p>Nunc vel massa nec nibh rutrum consequat. Curabitur tristique, nisi id mattis blandit, nibh massa rhoncus lacus, nec fermentum eros mi vitae mauris. Morbi fringilla dictum pulvinar.</p>
              <p>Proin ac risus eros, laoreet aliquam sapien. Vestibulum blandit fermentum turpis, id auctor sapien lobortis nec. Phasellus condimentum cursus velit, ac malesuada nulla volutpat vitae. Morbi semper mi nulla. Nulla id fringilla augue.</p>
              <p>Duis scelerisque egestas nunc, sit amet condimentum neque hendrerit vitae. Pellentesque pellentesque facilisis ultrices. Sed ac mi tellus, eget fringilla urna. Nunc id ipsum ut erat tempor ultrices vitae eu enim.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Labels -->
    <h1 class="page-header">Labels</h1>
    <section id="labels" style="margin-top:20px;">
      <p class="center">
        <span class="label" style="margin:20px;">Default</span>
        <span class="label label-success" style="margin:20px;">Success</span>
        <span class="label label-warning" style="margin:20px;">Warning</span>
        <span class="label label-important" style="margin:20px;">Important</span>
        <span class="label label-info" style="margin:20px;">Info</span>
        <span class="label label-inverse" style="margin:20px;">Inverse</span>
      </p>
    </section>
    
    
    <!-- Badges -->
    <h1 class="page-header">Badges</h1>
    <section id="badges" style="margin-top:20px;">
      <p class="center">
        <span class="badge" style="margin:20px;">Default</span>
        <span class="badge badge-success" style="margin:20px;">Success</span>
        <span class="badge badge-warning" style="margin:20px;">Warning</span>
        <span class="badge badge-important" style="margin:20px;">Important</span>
        <span class="badge badge-info" style="margin:20px;">Info</span>
        <span class="badge badge-inverse" style="margin:20px;">Inverse</span>
      </p>
    </section>
    
    <!-- Toggle -->
    <h1 class="page-header">Toggle</h1>
    <section id="toggle" style="margin-top:20px;">
      <p class="center" style="margin:20px auto;">
        <a class="btn btn-info btn-large noeffect" data-toggle="collapse" data-target="#toggledemo">Toggle Section</a>
      </p>
      <div id="toggledemo" class="collapse in"><div class="hero-unit sea-blue-1-bg">
        <h1 class="white center" style="text-shadow:#00a7b3 0 3px 15px;">Toggle Demo</h1>
      </div>
    </section>
    
    <!-- Modal -->
    <h1 class="page-header">Modal</h1>
    <section id="modal" style="margin-top:20px;">
      <p class="center" style="margin:20px auto;">
        <a href="#demo-modal" role="button" class="btn btn-warning btn-large noeffect" data-toggle="modal">Launch Modal</a>
      </p>
      <div id="demo-modal" class="modal hide fade in" tabindex="-1" role="content" aria-labelledby="search-modalLabel" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-h1-title">Modal Title</h1>
        </div>
        <div class="modal-body search-modal row-fluid">
          <p>oh hey there!</p>				
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-inverse noeffect" data-dismiss="modal" aria-hidden="true" title="Click to dismiss search">Close</a>
        </div>
      </div>
    </section>
    
    <!-- yet to add
    
    disabled
    
    carousel
    
    progress bars
    
    accordions
    
    responsive visibility classes
    
    -->
  
  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>