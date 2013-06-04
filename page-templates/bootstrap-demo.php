<?php
/**
 * Template Name: Demo - Bootstrap Demos
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
    <h1 class="page-header">Hero-unit
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-hero-unit">show code</a>
    </h1>
      <div id="toggle-hero-unit" class="collapse row-fluid">
<pre>
&lt;div class="hero-unit"&gt;
  &lt;h1&gt;I am a Hero unit&lt;/h1&gt;
  &lt;h3&gt;I am a secondary headline&lt;/h3&gt;
&lt;/div&gt;
</pre>
      </div>
    <section id="hero-unit" class="row-fluid">
      <div class="hero-unit">
        <h1>I am a Hero unit</h1>
        <h3>I am a secondary headline</h3>
      </div>
    </section>
    
    <!--Buttons -->
    <h1 class="page-header">Buttons
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-buttons">show code</a>
    </h1>
      <div id="toggle-buttons" class="collapse row-fluid">
<pre>
&lt;p&gt;
  &lt;a href="#" class="btn preventDefault"&gt;a.btn&lt;/a&gt;
  &lt;a href="#" class="btn btn-primary"&gt;a.btn-primary&lt;/a&gt;
  &lt;a href="#" class="btn btn-info"&gt;a.btn-info&lt;/a&gt;
  &lt;a href="#" class="btn btn-success"&gt;a.btn-success&lt;/a&gt;
  &lt;a href="#" class="btn btn-warning"&gt;a.btn-warning&lt;/a&gt;
  &lt;a href="#" class="btn btn-danger"&gt;a.btn-danger&lt;/a&gt;
  &lt;a href="#" class="btn btn-inverse"&gt;a.btn-inverse&lt;/a&gt;
  &lt;a href="#" class="btn btn-link"&gt;a.btn-link&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;a href="#" class="btn btn-primary btn-mini"&gt;a.btn-mini&lt;/a&gt;
  &lt;a href="#" class="btn btn-primary btn-small"&gt;a.btn-small&lt;/a&gt;
  &lt;a href="#" class="btn btn-primary"&gt;a.btn&lt;/a&gt;
  &lt;a href="#" class="btn btn-primary btn-large"&gt;a.btn-large&lt;/a&gt;
&lt;/p&gt;
&lt;p&gt;
  &lt;a href="#" class="btn btn-primary btn-block"&gt;a.btn-block&lt;/a&gt;
  &lt;a href="#" class="btn btn-block"&gt;a.btn-block&lt;/a&gt;
&lt;/p&gt;
</pre>
      </div>
    <section id="button">
      <p>
        <a href="#" class="btn preventDefault">a.btn</a>
        <a href="#" class="btn btn-primary">a.btn-primary</a>
        <a href="#" class="btn btn-info">a.btn-info</a>
        <a href="#" class="btn btn-success">a.btn-success</a>
        <a href="#" class="btn btn-warning">a.btn-warning</a>
        <a href="#" class="btn btn-danger">a.btn-danger</a>
        <a href="#" class="btn btn-inverse">a.btn-inverse</a>
        <a href="#" class="btn btn-link">a.btn-link</a>
      </p>
      <p>
        <a href="#" class="btn btn-primary btn-mini">a.btn-mini</a>
        <a href="#" class="btn btn-primary btn-small">a.btn-small</a>
        <a href="#" class="btn btn-primary">a.btn</a>
        <a href="#" class="btn btn-primary btn-large">a.btn-large</a>
      </p>
      <p>
        <a href="#" class="btn btn-primary btn-block">a.btn-block</a>
        <a href="#" class="btn btn-block">a.btn-block</a>
      </p>
    </section>
    
    <!--Wells -->
    <h1 class="page-header">Well
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-wells">show code</a>
    </h1>
      <div id="toggle-wells" class="collapse row-fluid">
<pre>
&lt;p class="well well-small"&gt;I am a small well&lt;/p&gt;
&lt;p class="well"&gt;I am a well&lt;/p&gt;
&lt;p class="well well-large"&gt;I am a large well&lt;/p&gt;
</pre>
      </div>
    <section id="well" class="row-fluid">
      <p class="well well-small">I am a small well</p>
      <p class="well">I am a well</p>
      <p class="well well-large">I am a large well</p>
    </section>
    
    <!--Scaffolding -->
    <h1 class="page-header">Scaffolding
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-scaffolding">show code</a>
    </h1>
      <div id="toggle-scaffolding" class="collapse row-fluid">
<pre>
&lt;div class="row-fluid"&gt;
  &lt;div class="span6"&gt;.span6&lt;/div&gt;
  &lt;div class="span6"&gt;.span6&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row-fluid"&gt;
  &lt;div class="span4"&gt;.span4&lt;/div&gt;
  &lt;div class="span4"&gt;.span4&lt;/div&gt;
  &lt;div class="span4"&gt;.span4&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row-fluid"&gt;
  &lt;div class="span3"&gt;.span3&lt;/div&gt;
  &lt;div class="span3"&gt;.span3&lt;/div&gt;
  &lt;div class="span3"&gt;.span3&lt;/div&gt;
  &lt;div class="span3"&gt;.span3&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row-fluid"&gt;
  &lt;div class="span2"&gt;.span2&lt;/div&gt;
  &lt;div class="span2"&gt;.span2&lt;/div&gt;
  &lt;div class="span2"&gt;.span2&lt;/div&gt;
  &lt;div class="span2"&gt;.span2&lt;/div&gt;
  &lt;div class="span2"&gt;.span2&lt;/div&gt;
  &lt;div class="span2"&gt;.span2&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row-fluid"&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
  &lt;div class="span1"&gt;1&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row-fluid"&gt;
  &lt;div class="span7 offset1"&gt;.span7 .offset1&lt;/div&gt;
  &lt;div class="span3 offset1"&gt;.span3 .offset1&lt;/div&gt;
&lt;/div&gt;
&lt;div class="row-fluid"&gt;
  &lt;div class="span12"&gt;.span12&lt;/div&gt;
&lt;/div&gt;
</pre>
      </div>
    <section id="scaffolding">
      <div class="row-fluid">
        <div class="span6">.span6</div>
        <div class="span6">.span6</div>
      </div>
      <div class="row-fluid">
        <div class="span4">.span4</div>
        <div class="span4">.span4</div>
        <div class="span4">.span4</div>
      </div>
      <div class="row-fluid">
        <div class="span3">.span3</div>
        <div class="span3">.span3</div>
        <div class="span3">.span3</div>
        <div class="span3">.span3</div>
      </div>
      <div class="row-fluid">
        <div class="span2">.span2</div>
        <div class="span2">.span2</div>
        <div class="span2">.span2</div>
        <div class="span2">.span2</div>
        <div class="span2">.span2</div>
        <div class="span2">.span2</div>
      </div>
      <div class="row-fluid">
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
        <div class="span1">1</div>
      </div>
      <div class="row-fluid">
        <div class="span7 offset1">.span7 .offset1</div>
        <div class="span3 offset1">.span3 .offset1</div>
      </div>
      <div class="row-fluid">
        <div class="span12">.span12</div>
      </div>
    </section>
    
    <!-- Tooltip -->
    <h1 class="page-header">Tooltips
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-tooltips">show code</a>
    </h1>
      <div id="toggle-tooltips" class="collapse row-fluid">
<pre>
&lt;a href="#" data-toggle="tooltip" title="demo text goes here"&gt;tooltip&lt;/a&gt;
&lt;a href="#" data-toggle="tooltip-down" title="demo text goes here"&gt;tooltip-down&lt;/a&gt;
&lt;a href="#" data-toggle="tooltip-right" title="demo text goes here"&gt;tooltip-right&lt;/a&gt;
&lt;a href="#" data-toggle="tooltip-left" title="demo text goes here"&gt;tooltip-left&lt;/a&gt;
</pre>
      </div>
    <section id="tooltip" class="row-fluid">
      <p>Cras sit amet magna nulla. <a href="#" data-toggle="tooltip" title="Etiam in quam lacus">Pellentesque</a> quis urna urna, sit amet egestas elit. Ut ultricies, lacus id gravida scelerisque, nisi leo blandit neque, in auctor nunc urna ac dolor. Nam sodales iaculis diam. Aliquam ligula sem, <a href="#" data-toggle="tooltip" title="urna turpis">dapibus sed sagittis quis</a>, volutpat blandit ipsum. Integer ornare viverra lacinia. Pellentesque ac risus eget mauris laoreet vehicula sit amet eu lectus. Duis ac dapibus nibh. Nam ut tortor id enim congue imperdiet. Praesent a libero massa. <a href="#" data-toggle="tooltip" title="Aliquam nunc turpis, vestibulum at scelerisque sed, facilisis quis magna. Proin quis turpis quis quam lacinia congue condimentum a libero.">Vivamus</a> elementum pulvinar nisi, at rutrum odio faucibus ac. Integer sed magna lectus. Praesent adipiscing porta felis, vel imperdiet magna rhoncus pharetra. Ut ut magna velit, sed fringilla ante. Nullam accumsan elit in mauris aliquam suscipit non eget nisl. Vivamus massa augue, dignissim ut luctus accumsan, eleifend id nunc.</p>
      <div class="row-fluid">
        <div class="span3">
          <a href="#" data-toggle="tooltip" title="demo text goes here">tooltip</a>
        </div>
        <div class="span3">
          <a href="#" data-toggle="tooltip-down" title="demo text goes here">tooltip-down</a>
        </div>
        <div class="span3">
          <a href="#" data-toggle="tooltip-right" title="demo text goes here">tooltip-right</a>
        </div>
        <div class="span3">
          <a href="#" data-toggle="tooltip-left" title="demo text goes here">tooltip-left</a>
        </div>
      </div>
    </section>
    
    <!-- Popovers -->
    <h1 class="page-header">Popovers
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-popovers">show code</a>
    </h1>
      <div id="toggle-popovers" class="collapse row-fluid">
<pre>
&lt;a href="#" data-toggle="popover" class="btn" title="Demo Title" data-content="Sample content"&gt;popover&lt;/a&gt;
&lt;a href="#" data-toggle="popover-down" class="btn" title="Demo Title" data-content="Sample content"&gt;popover-down&lt;/a&gt;
&lt;a href="#" data-toggle="popover-right" class="btn" title="Demo Title" data-content="Sample content"&gt;popover-right&lt;/a&gt;
&lt;a href="#" data-toggle="popover-left" class="btn" title="Demo Title" data-content="Sample content"&gt;popover-left&lt;/a&gt;
</pre>
      </div>
    <section id="popover" class="row-fluid">
      <p>Curabitur venenatis neque quis nisl <a href="#" data-toggle="popover" title="Sed ornare dignissim" data-content="Proin ultricies risus id libero dignissim malesuada.">malesuada</a> lobortis. Proin interdum erat eu enim elementum sit amet accumsan augue pharetra. Curabitur blandit dolor ut lacus adipiscing eget fermentum nibh mattis. Quisque enim risus, ultricies quis vulputate sed, fringilla vel erat. Vestibulum ac massa nisl. Ut dignissim varius iaculis. Donec magna lorem, consectetur dictum adipiscing congue, aliquet a lacus. Etiam congue mattis quam, eu molestie massa semper nec. <a href="#" data-toggle="popover" title="Praesent imperdiet" data-content="Etiam congue mattis quam, eu molestie massa semper nec. Quisque tempus, nunc ut aliquam blandit, sem dolor aliquam neque, at vulputate nulla tortor at est.">Quisque</a> tempus, nunc ut aliquam blandit, sem dolor aliquam neque, at vulputate nulla tortor at est. Nam commodo ultricies dui vel ullamcorper. Donec viverra fringilla urna, in molestie enim cursus faucibus. Praesent sit amet erat in erat faucibus euismod at non lorem. Vivamus enim risus, <a href="#" data-toggle="popover" title="Vestibulum ac nunc lorem" data-content="Sed ullamcorper nibh vitae tellus commodo eleifend.">consequat</a> sit amet consequat eget, tristique id ligula. Pellentesque lobortis tincidunt est sed scelerisque.</p>
      <div class="row-fluid">
        <div class="span3">
          <a href="#" data-toggle="popover" class="btn" title="Demo Title" data-content="Sample content">popover</a>
        </div>
        <div class="span3">
          <a href="#" data-toggle="popover-down" class="btn" title="Demo Title" data-content="Sample content">popover-down</a>
        </div>
        <div class="span3">
          <a href="#" data-toggle="popover-right" class="btn" title="Demo Title" data-content="Sample content">popover-right</a>
        </div>
        <div class="span3">
          <a href="#" data-toggle="popover-left" class="btn" title="Demo Title" data-content="Sample content">popover-left</a>
        </div>
      </div>
    </section>
    
    <!-- Tabs -->
    <h1 class="page-header">Tabs
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-tabs">show code</a>
    </h1>
<div id="toggle-tabs" class="collapse row-fluid">
<pre>
&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="active"&gt;&lt;a href="#home" data-toggle="tab"&gt;Home&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#profile" data-toggle="tab"&gt;Profile&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#messages" data-toggle="tab"&gt;Messages&lt;/a&gt;&lt;/li&gt;
  &lt;li&gt;&lt;a href="#settings" data-toggle="tab"&gt;Settings&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content"&gt;
  &lt;div class="tab-pane fade in active" id="home"&gt;
    &lt;p&gt;Home content here&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="tab-pane fade in" id="profile"&gt;
    &lt;p&gt;Profile content here&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="tab-pane fade in" id="messages"&gt;
    &lt;p&gt;Messages content here&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="tab-pane fade in" id="settings"&gt;
    &lt;p&gt;Settings content here&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
      </div>
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
    <h1 class="page-header">Labels
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-labels">show code</a>
    </h1>
      <div id="toggle-labels" class="collapse row-fluid">
<pre>
&lt;span class="label"&gt;Default&lt;/span&gt;
&lt;span class="label label-success"&gt;Success&lt;/span&gt;
&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;
&lt;span class="label label-important"&gt;Important&lt;/span&gt;
&lt;span class="label label-info"&gt;Info&lt;/span&gt;
&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;
</pre>
      </div>
    <section id="labels">
      <p class="center">
        <span class="label">Default</span>
        <span class="label label-success">Success</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-important">Important</span>
        <span class="label label-info">Info</span>
        <span class="label label-inverse">Inverse</span>
      </p>
    </section>
    
    
    <!-- Badges -->
    <h1 class="page-header">Badges
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-badges">show code</a>
    </h1>
      <div id="toggle-badges" class="collapse row-fluid">
<pre>
&lt;span class="badge"&gt;Default&lt;/span&gt;
&lt;span class="badge badge-success"&gt;Success&lt;/span&gt;
&lt;span class="badge badge-warning"&gt;Warning&lt;/span&gt;
&lt;span class="badge badge-important"&gt;Important&lt;/span&gt;
&lt;span class="badge badge-info"&gt;Info&lt;/span&gt;
&lt;span class="badge badge-inverse"&gt;Inverse&lt;/span&gt;
</pre>
      </div>
    <section id="badges">
      <p class="center">
        <span class="badge">Default</span>
        <span class="badge badge-success">Success</span>
        <span class="badge badge-warning">Warning</span>
        <span class="badge badge-important">Important</span>
        <span class="badge badge-info">Info</span>
        <span class="badge badge-inverse">Inverse</span>
      </p>
    </section>
    
    <!-- Toggle -->
    <h1 class="page-header">Toggle
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-code">show code</a>
    </h1>
      <div id="toggle-code" class="collapse row-fluid">
<pre>
&lt;p class="center"&gt;
  &lt;a class="btn" data-toggle="collapse" data-target="#toggle-demo"&gt;Toggle Section&lt;/a&gt;
&lt;/p&gt;
&lt;div id="toggle-demo" class="collapse"&gt;
  &lt;div class="hero-unit"&gt;
    &lt;h1 class="center"&gt;Toggle Demo&lt;/h1&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
      </div>
    <section id="toggle">
      <p class="center">
        <a class="btn" data-toggle="collapse" data-target="#toggle-demo">Toggle Section</a>
      </p>
      <div id="toggle-demo" class="collapse">
        <div class="hero-unit">
          <h1 class="center">Toggle Demo</h1>
        </div>
      </div>
    </section>
    
    <!-- Modal -->
    <h1 class="page-header">Modal
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-modal">show code</a>
    </h1>
    <div id="toggle-modal" class="collapse row-fluid">
<pre>
&lt;p class="center" style="margin:20px auto;"&gt;
  &lt;a href="#demo-modal" role="button" class="btn" data-toggle="modal"&gt;Launch Modal&lt;/a&gt;
&lt;/p&gt;
&lt;div id="demo-modal" class="modal hide fade in" role="content" aria-hidden="true"&gt;
  &lt;div class="modal-header"&gt;
    &lt;button type="button" class="close" data-dismiss="modal" aria-hidden="true"&gt;&amp;times;&lt;/button&gt;
    &lt;h1 class="modal-h1-title"&gt;Demo Modal&lt;/h1&gt;
  &lt;/div&gt;
  &lt;div class="modal-body search-modal row-fluid"&gt;
    &lt;p&gt;Oh hello!&lt;/p&gt;				
  &lt;/div&gt;
  &lt;div class="modal-footer"&gt;
    &lt;a href="#" class="btn btn-inverse" data-dismiss="modal" aria-hidden="true" title="Click to dismiss search"&gt;Close&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>
    </div>
    <section id="modal">
      <p class="center" style="margin:20px auto;">
        <a href="#demo-modal" role="button" class="btn" data-toggle="modal">Launch Modal</a>
      </p>
      <div id="demo-modal" class="modal hide fade in" role="content" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h1 class="modal-h1-title">Demo Modal</h1>
        </div>
        <div class="modal-body search-modal row-fluid">
          <p>Oh hello!</p>				
        </div>
        <div class="modal-footer">
          <a href="#" class="btn btn-inverse" data-dismiss="modal" aria-hidden="true" title="Click to dismiss search">Close</a>
        </div>
      </div>
    </section>

    <!--Hero Unit -->
    <h1 class="page-header">Disabled
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-disabled">show code</a>
    </h1>
      <div id="toggle-disabled" class="collapse row-fluid">
<pre>
&lt;a href="#" class="btn disabled"&gt;button&lt;/a&gt;
</pre>
      </div>
    <section id="disabled" class="row-fluid">
      <p><a href="#" class="btn disabled">button</a></p>
    </section>
     
    <!--Progress Bars -->
    <h1 class="page-header">Progress Bars
      <a class="btn btn-link btn-large pull-right" data-toggle="collapse" data-target="#toggle-progressbars">show code</a>
    </h1>
      <div id="toggle-progressbars" class="collapse row-fluid">
<pre>
&lt;div class="progress"&gt;
  &lt;div class="bar" style="width: 25%;"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress progress-striped"&gt;
  &lt;div class="bar" style="width: 50%;"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress progress-striped active"&gt;
  &lt;div class="bar" style="width: 75%;"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress"&gt;
  &lt;div class="bar bar-success" style="width: 30%;"&gt;&lt;/div&gt;
  &lt;div class="bar bar-warning" style="width: 25%;"&gt;&lt;/div&gt;
  &lt;div class="bar bar-danger" style="width: 10%;"&gt;&lt;/div&gt;
  &lt;div class="bar bar-info" style="width: 15%;"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress progress-info"&gt;
  &lt;div class="bar" style="width: 35%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress progress-success"&gt;
  &lt;div class="bar" style="width: 70%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress progress-warning"&gt;
  &lt;div class="bar" style="width: 95%"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class="progress progress-danger"&gt;
  &lt;div class="bar" style="width: 80%"&gt;&lt;/div&gt;
&lt;/div&gt;
</pre>
      </div>
    <section id="progress-bar" class="row-fluid">
    <div class="progress">
      <div class="bar" style="width: 25%;"></div>
    </div>
    
    <div class="progress progress-striped">
      <div class="bar" style="width: 50%;"></div>
    </div>
    
    <div class="progress progress-striped active">
      <div class="bar" style="width: 75%;"></div>
    </div>
    
    <div class="progress">
      <div class="bar bar-success" style="width: 30%;"></div>
      <div class="bar bar-warning" style="width: 25%;"></div>
      <div class="bar bar-danger" style="width: 10%;"></div>
      <div class="bar bar-info" style="width: 15%;"></div>
    </div>
    
    <div class="progress progress-info">
      <div class="bar" style="width: 35%"></div>
    </div>
    
    <div class="progress progress-success">
      <div class="bar" style="width: 70%"></div>
    </div>
    
    <div class="progress progress-warning">
      <div class="bar" style="width: 95%"></div>
    </div>
    
    <div class="progress progress-danger">
      <div class="bar" style="width: 80%"></div>
    </div>
    </section>
    

    <!-- yet to add
        
    carousel
        
    accordions
    
    responsive visibility classes
    
    -->
  
    <!-- CSS Styles -->
    <style type="text/css">

      section {
        margin: 20px 0 40px 0;
      }
      
      #button .btn,
      #button p,
      #tooltip .span3,
      #popover .span3,
      #disabled p {
        margin:  20px 0;
        text-align: center;
      }
      
      #well .well {
        margin: 0 0 20px 0;
        text-align: center; 
      }
      
      #scaffolding .row-fluid > div {
        background: #eee;
        border-radius: 5px;
        padding: 20px;
        margin-top: 20px;
        text-align: center;
      }
      
      #labels .label,
      #badges .badge {
        margin:  20px;
      }
    
    </style>
  
  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>