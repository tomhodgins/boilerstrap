<?php
/**
 * Template Name: Demo - Color Palette
 *
 * Description: This page template contains the Oxygen color palette
 * as well as a list of named colors for branding that can be applied
 * simply with the addition of classnames to an element
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
  
    <!-- Palette Demos -->
    <h1 class="page-header">Oxygen Palette <small class="hidden-phone">from the <span class="brand"><a href="http://www.oxygen-icons.org/" title="Click to visit the Oxygen Project" style="color:#999999;">Oxygen Project</a></span></small></h1>
    <section id="oxygen-palette" style="color:#ffffff;font-weight:700;padding:20px 0;">
        
      <div class="row-fluid">
        <a href="#" class="span4 wood-brown">Wood Brown</a>
        <a href="#" class="span1 wood-brown-1-bg" data-toggle="tooltip" data-trigger="click" title="#debc85">1</a>        
        <a href="#" class="span1 wood-brown-2-bg" data-toggle="tooltip" data-trigger="click" title="#b3925d">2</a>
        <a href="#" class="span1 wood-brown-3-bg" data-toggle="tooltip" data-trigger="click" title="#8f6b32">3</a>
        <a href="#" class="span1 wood-brown-4-bg" data-toggle="tooltip" data-trigger="click" title="#75511a">4</a>
        <a href="#" class="span1 wood-brown-5-bg" data-toggle="tooltip" data-trigger="click" title="#57401e">5</a>
        <a href="#" id="example" class="span1 wood-brown-6-bg" data-toggle="tooltip" data-trigger="click" title="#382509">6</a>
      </div>
      
       <div class="instruction"></div>
      
      <div class="row-fluid">
        <a href="#" class="span4 brick-red">Brick Red</a>
        <a href="#" class="span1 brick-red-1-bg" data-toggle="tooltip" data-trigger="click" title="#f9ccca">1</a>
        <a href="#" class="span1 brick-red-2-bg" data-toggle="tooltip" data-trigger="click" title="#f08682">2</a>
        <a href="#" class="span1 brick-red-3-bg" data-toggle="tooltip" data-trigger="click" title="#e85752">3</a>
        <a href="#" class="span1 brick-red-4-bg" data-toggle="tooltip" data-trigger="click" title="#e20800">4</a>
        <a href="#" class="span1 brick-red-5-bg" data-toggle="tooltip" data-trigger="click" title="#bf0303">5</a>
        <a href="#" class="span1 brick-red-6-bg" data-toggle="tooltip" data-trigger="click" title="#9c0f0f">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 raspberry-pink">Raspberry Pink</a>
        <a href="#" class="span1 raspberry-pink-1-bg" data-toggle="tooltip" data-trigger="click" title="#f9cade">1</a>
        <a href="#" class="span1 raspberry-pink-2-bg" data-toggle="tooltip" data-trigger="click" title="#f082b0">2</a>
        <a href="#" class="span1 raspberry-pink-3-bg" data-toggle="tooltip" data-trigger="click" title="#e85290">3</a>
        <a href="#" class="span1 raspberry-pink-4-bg" data-toggle="tooltip" data-trigger="click" title="#e20071">4</a>
        <a href="#" class="span1 raspberry-pink-5-bg" data-toggle="tooltip" data-trigger="click" title="#bf0361">5</a>
        <a href="#" class="span1 raspberry-pink-6-bg" data-toggle="tooltip" data-trigger="click" title="#9c0f56">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 burgundy-purple">Burgundy Purple</a>
        <a href="#" class="span1 burgundy-purple-1-bg" data-toggle="tooltip" data-trigger="click" title="#e8b7d7">1</a>
        <a href="#" class="span1 burgundy-purple-2-bg" data-toggle="tooltip" data-trigger="click" title="#e8b7d7">2</a>
        <a href="#" class="span1 burgundy-purple-3-bg" data-toggle="tooltip" data-trigger="click" title="#b14f9a">3</a>
        <a href="#" class="span1 burgundy-purple-4-bg" data-toggle="tooltip" data-trigger="click" title="#a02786">4</a>
        <a href="#" class="span1 burgundy-purple-5-bg" data-toggle="tooltip" data-trigger="click" title="#85026c">5</a>
        <a href="#" class="span1 burgundy-purple-6-bg" data-toggle="tooltip" data-trigger="click" title="#6a0056">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 grape-violet">Grape Violet</a>
        <a href="#" class="span1 grape-violet-1-bg" data-toggle="tooltip" data-trigger="click" title="#c3b4da">1</a>
        <a href="#" class="span1 grape-violet-2-bg" data-toggle="tooltip" data-trigger="click" title="#8e79a5">2</a>
        <a href="#" class="span1 grape-violet-3-bg" data-toggle="tooltip" data-trigger="click" title="#644a9b">3</a>
        <a href="#" class="span1 grape-violet-4-bg" data-toggle="tooltip" data-trigger="click" title="#462886">4</a>
        <a href="#" class="span1 grape-violet-5-bg" data-toggle="tooltip" data-trigger="click" title="#34176e">5</a>
        <a href="#" class="span1 grape-violet-6-bg" data-toggle="tooltip" data-trigger="click" title="#1d0a55">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 sky-blue">Sky Blue</a>
        <a href="#" class="span1 sky-blue-1-bg" data-toggle="tooltip" data-trigger="click" title="#a4c0e4">1</a>
        <a href="#" class="span1 sky-blue-2-bg" data-toggle="tooltip" data-trigger="click" title="#6193cf">2</a>
        <a href="#" class="span1 sky-blue-3-bg" data-toggle="tooltip" data-trigger="click" title="#2c72c7">3</a>
        <a href="#" class="span1 sky-blue-4-bg" data-toggle="tooltip" data-trigger="click" title="#0057ae">4</a>
        <a href="#" class="span1 sky-blue-5-bg" data-toggle="tooltip" data-trigger="click" title="#00438a">5</a>
        <a href="#" class="span1 sky-blue-6-bg" data-toggle="tooltip" data-trigger="click" title="#00316e">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 sea-blue">Sea Blue</a>
        <a href="#" class="span1 sea-blue-1-bg" data-toggle="tooltip" data-trigger="click" title="#a8dde0">1</a>
        <a href="#" class="span1 sea-blue-2-bg" data-toggle="tooltip" data-trigger="click" title="#00c4cc">2</a>
        <a href="#" class="span1 sea-blue-3-bg" data-toggle="tooltip" data-trigger="click" title="#00a7b3">3</a>
        <a href="#" class="span1 sea-blue-4-bg" data-toggle="tooltip" data-trigger="click" title="#007880">4</a>
        <a href="#" class="span1 sea-blue-5-bg" data-toggle="tooltip" data-trigger="click" title="#006066">5</a>
        <a href="#" class="span1 sea-blue-6-bg" data-toggle="tooltip" data-trigger="click" title="#00484d">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 emerald-green">Emerald Green</a>
        <a href="#" class="span1 emerald-green-1-bg" data-toggle="tooltip" data-trigger="click" title="#99dc88">1</a>
        <a href="#" class="span1 emerald-green-2-bg" data-toggle="tooltip" data-trigger="click" title="#00cc88">2</a>
        <a href="#" class="span1 emerald-green-3-bg" data-toggle="tooltip" data-trigger="click" title="#00b377">3</a>
        <a href="#" class="span1 emerald-green-4-bg" data-toggle="tooltip" data-trigger="click" title="#009966">4</a>
        <a href="#" class="span1 emerald-green-5-bg" data-toggle="tooltip" data-trigger="click" title="#00734d">5</a>
        <a href="#" class="span1 emerald-green-6-bg" data-toggle="tooltip" data-trigger="click" title="#00583f">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 forest-green">Forest Green</a>
        <a href="#" class="span1 forest-green-1-bg" data-toggle="tooltip" data-trigger="click" title="#d8e8c2">1</a>
        <a href="#" class="span1 forest-green-2-bg" data-toggle="tooltip" data-trigger="click" title="#b1d28f">2</a>
        <a href="#" class="span1 forest-green-3-bg" data-toggle="tooltip" data-trigger="click" title="#77b753">3</a>
        <a href="#" class="span1 forest-green-4-bg" data-toggle="tooltip" data-trigger="click" title="#37a42c">4</a>
        <a href="#" class="span1 forest-green-5-bg" data-toggle="tooltip" data-trigger="click" title="#00892c">5</a>
        <a href="#" class="span1 forest-green-6-bg" data-toggle="tooltip" data-trigger="click" title="#006e29">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 sun-yellow">Sun Yellow</a>
        <a href="#" class="span1 sun-yellow-1-bg" data-toggle="tooltip" data-trigger="click" title="#fff6c8">1</a>
        <a href="#" class="span1 sun-yellow-2-bg" data-toggle="tooltip" data-trigger="click" title="#fff299">2</a>
        <a href="#" class="span1 sun-yellow-3-bg" data-toggle="tooltip" data-trigger="click" title="#ffeb55">3</a>
        <a href="#" class="span1 sun-yellow-4-bg" data-toggle="tooltip" data-trigger="click" title="#ffdd00">4</a>
        <a href="#" class="span1 sun-yellow-5-bg" data-toggle="tooltip" data-trigger="click" title="#f3c300">5</a>
        <a href="#" class="span1 sun-yellow-6-bg" data-toggle="tooltip" data-trigger="click" title="#e3ad00">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 hot-orange">Hot Orange</a>
        <a href="#" class="span1 hot-orange-1-bg" data-toggle="tooltip" data-trigger="click" title="#ffd9b0">1</a>
        <a href="#" class="span1 hot-orange-2-bg" data-toggle="tooltip" data-trigger="click" title="#f2bb88">2</a>
        <a href="#" class="span1 hot-orange-3-bg" data-toggle="tooltip" data-trigger="click" title="#f29b68">3</a>
        <a href="#" class="span1 hot-orange-4-bg" data-toggle="tooltip" data-trigger="click" title="#eb7331">4</a>
        <a href="#" class="span1 hot-orange-5-bg" data-toggle="tooltip" data-trigger="click" title="#cf4913">5</a>
        <a href="#" class="span1 hot-orange-6-bg" data-toggle="tooltip" data-trigger="click" title="#ac4311">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 aluminum-gray">Aluminum Gray</a>
        <a href="#" class="span1 aluminum-gray-1-bg" data-toggle="tooltip" data-trigger="click" title="#eeeeec">1</a>
        <a href="#" class="span1 aluminum-gray-2-bg" data-toggle="tooltip" data-trigger="click" title="#d3d7cf">2</a>
        <a href="#" class="span1 aluminum-gray-3-bg" data-toggle="tooltip" data-trigger="click" title="#babdb6">3</a>
        <a href="#" class="span1 aluminum-gray-4-bg" data-toggle="tooltip" data-trigger="click" title="#888a85">4</a>
        <a href="#" class="span1 aluminum-gray-5-bg" data-toggle="tooltip" data-trigger="click" title="#555753">5</a>
        <a href="#" class="span1 aluminum-gray-6-bg" data-toggle="tooltip" data-trigger="click" title="#2e3436">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 brown-orange">Brown Orange</a>
        <a href="#" class="span1 brown-orange-1-bg" data-toggle="tooltip" data-trigger="click" title="#ffdfbf">1</a>
        <a href="#" class="span1 brown-orange-2-bg" data-toggle="tooltip" data-trigger="click" title="#ffbf80">2</a>
        <a href="#" class="span1 brown-orange-3-bg" data-toggle="tooltip" data-trigger="click" title="#ff7e00">3</a>
        <a href="#" class="span1 brown-orange-4-bg" data-toggle="tooltip" data-trigger="click" title="#bf5e00">4</a>
        <a href="#" class="span1 brown-orange-5-bg" data-toggle="tooltip" data-trigger="click" title="#803f00">5</a>
        <a href="#" class="span1 brown-orange-6-bg" data-toggle="tooltip" data-trigger="click" title="#4d2600">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 red">Red</a>
        <a href="#" class="span1 red-1-bg" data-toggle="tooltip" data-trigger="click" title="#ffbfbf">1</a>
        <a href="#" class="span1 red-2-bg" data-toggle="tooltip" data-trigger="click" title="#ff8080">2</a>
        <a href="#" class="span1 red-3-bg" data-toggle="tooltip" data-trigger="click" title="#ff0000">3</a>
        <a href="#" class="span1 red-4-bg" data-toggle="tooltip" data-trigger="click" title="#bf0000">4</a>
        <a href="#" class="span1 red-5-bg" data-toggle="tooltip" data-trigger="click" title="#8c0000">5</a>
        <a href="#" class="span1 red-6-bg" data-toggle="tooltip" data-trigger="click" title="#590000">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 pink">Pink</a>
        <a href="#" class="span1 pink-1-bg" data-toggle="tooltip" data-trigger="click" title="#ffbff0">1</a>
        <a href="#" class="span1 pink-2-bg" data-toggle="tooltip" data-trigger="click" title="#ff80e9">2</a>
        <a href="#" class="span1 pink-3-bg" data-toggle="tooltip" data-trigger="click" title="#ff00bf">3</a>
        <a href="#" class="span1 pink-4-bg" data-toggle="tooltip" data-trigger="click" title="#cc009a">4</a>
        <a href="#" class="span1 pink-5-bg" data-toggle="tooltip" data-trigger="click" title="#a3007b">5</a>
        <a href="#" class="span1 pink-6-bg" data-toggle="tooltip" data-trigger="click" title="#730055">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 purple">Purple</a>
        <a href="#" class="span1 purple-1-bg" data-toggle="tooltip" data-trigger="click" title="#dfbfff">1</a>
        <a href="#" class="span1 purple-2-bg" data-toggle="tooltip" data-trigger="click" title="#c080ff">2</a>
        <a href="#" class="span1 purple-3-bg" data-toggle="tooltip" data-trigger="click" title="#8000ff">3</a>
        <a href="#" class="span1 purple-4-bg" data-toggle="tooltip" data-trigger="click" title="#5a00b3">4</a>
        <a href="#" class="span1 purple-5-bg" data-toggle="tooltip" data-trigger="click" title="#400080">5</a>
        <a href="#" class="span1 purple-6-bg" data-toggle="tooltip" data-trigger="click" title="#2c0059">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 blue">Blue</a>
        <a href="#" class="span1 blue-1-bg" data-toggle="tooltip" data-trigger="click" title="#bfd9ff">1</a>
        <a href="#" class="span1 blue-2-bg" data-toggle="tooltip" data-trigger="click" title="#80b3ff">2</a>
        <a href="#" class="span1 blue-3-bg" data-toggle="tooltip" data-trigger="click" title="#0066ff">3</a>
        <a href="#" class="span1 blue-4-bg" data-toggle="tooltip" data-trigger="click" title="#0000ff">4</a>
        <a href="#" class="span1 blue-5-bg" data-toggle="tooltip" data-trigger="click" title="#0000bf">5</a>
        <a href="#" class="span1 blue-6-bg" data-toggle="tooltip" data-trigger="click" title="#000080">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 green">Green</a>
        <a href="#" class="span1 green-1-bg" data-toggle="tooltip" data-trigger="click" title="#bfffbf">1</a>
        <a href="#" class="span1 green-2-bg" data-toggle="tooltip" data-trigger="click" title="#80ff80">2</a>
        <a href="#" class="span1 green-3-bg" data-toggle="tooltip" data-trigger="click" title="#00ff00">3</a>
        <a href="#" class="span1 green-4-bg" data-toggle="tooltip" data-trigger="click" title="#00bf00">4</a>
        <a href="#" class="span1 green-5-bg" data-toggle="tooltip" data-trigger="click" title="#008c00">5</a>
        <a href="#" class="span1 green-6-bg" data-toggle="tooltip" data-trigger="click" title="#004d00">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 lime">Lime</a>
        <a href="#" class="span1 lime-1-bg" data-toggle="tooltip" data-trigger="click" title="#f8ffbf">1</a>
        <a href="#" class="span1 lime-2-bg" data-toggle="tooltip" data-trigger="click" title="#f8ff80">2</a>
        <a href="#" class="span1 lime-3-bg" data-toggle="tooltip" data-trigger="click" title="#e5ff00">3</a>
        <a href="#" class="span1 lime-4-bg" data-toggle="tooltip" data-trigger="click" title="#bff500">4</a>
        <a href="#" class="span1 lime-5-bg" data-toggle="tooltip" data-trigger="click" title="#8bb300">5</a>
        <a href="#" class="span1 lime-6-bg" data-toggle="tooltip" data-trigger="click" title="#638000">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 yellow">Yellow</a>
        <a href="#" class="span1 yellow-1-bg" data-toggle="tooltip" data-trigger="click" title="#ffffbf">1</a>
        <a href="#" class="span1 yellow-2-bg" data-toggle="tooltip" data-trigger="click" title="#ffff99">2</a>
        <a href="#" class="span1 yellow-3-bg" data-toggle="tooltip" data-trigger="click" title="#ffff00">3</a>
        <a href="#" class="span1 yellow-4-bg" data-toggle="tooltip" data-trigger="click" title="#ffd500">4</a>
        <a href="#" class="span1 yellow-5-bg" data-toggle="tooltip" data-trigger="click" title="#ffbf00">5</a>
        <a href="#" class="span1 yellow-6-bg" data-toggle="tooltip" data-trigger="click" title="#ffaa00">6</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 gray">Gray</a>
        <a href="#" class="span1 gray-1-bg" data-toggle="tooltip" data-trigger="click" title="#eeeeee">1</a>
        <a href="#" class="span1 gray-2-bg" data-toggle="tooltip" data-trigger="click" title="#dddddd">2</a>
        <a href="#" class="span1 gray-3-bg" data-toggle="tooltip" data-trigger="click" title="#bbbbbb">3</a>
        <a href="#" class="span1 gray-4-bg" data-toggle="tooltip" data-trigger="click" title="#888888">4</a>
        <a href="#" class="span1 gray-5-bg" data-toggle="tooltip" data-trigger="click" title="#555555">5</a>
        <a href="#" class="span1 gray-6-bg" data-toggle="tooltip" data-trigger="click" title="#323232">6</a>
      </div>
    
    </section>
    
    <h1 class="page-header">Named Colors</h1>
    <section id="named-colors" style="color:#ffffff;font-weight:700;padding:20px 0;">
      
      <div class="row-fluid">
        <a href="#" class="span4 skype-blue">skype-blue</a>
        <a href="#" class="span6 skype-blue-bg" data-toggle="tooltip" data-trigger="click" title="#2caae1">skype-blue-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 twitter-blue">twitter-blue</a>
        <a href="#" class="span6 twitter-blue-bg" data-toggle="tooltip" data-trigger="click" title="#2caae1">twitter-blue-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 linkedin-blue">linkedin-blue</a>
        <a href="#" class="span6 linkedin-blue-bg" data-toggle="tooltip" data-trigger="click" title="#007bb6">linkedin-blue-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 facebook-purple">facebook-purple</a>
        <a href="#" class="span6 facebook-purple-bg" data-toggle="tooltip" data-trigger="click" title="#3b5998">facebook-purple-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 pinterest-red">pinterest-red</a>
        <a href="#" class="span6 pinterest-red-bg" data-toggle="tooltip" data-trigger="click" title="#cb2027">pinterest-red-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 google-plus-red">google-plus-red</a>
        <a href="#" class="span6 google-plus-red-bg" data-toggle="tooltip" data-trigger="click" title="#dd4b38">google-plus-red-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 flickr-pink">flickr-pink</a>
        <a href="#" class="span6 flickr-pink-bg" data-toggle="tooltip" data-trigger="click" title="#ff0084">flickr-pink-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 white">white</a>
        <a href="#" class="span6 black white-bg" data-toggle="tooltip" data-trigger="click" title="#ffffff">white-bg</a>
      </div>
      
      <div class="row-fluid">
        <a href="#" class="span4 black">black</a>
        <a href="#" class="span6 black-bg" data-toggle="tooltip" data-trigger="click" title="#000000">black-bg</a>
      </div>
    
    </section>
    
      
    <!-- CSS Styles -->
    <style type="text/css">

      a:hover {
        text-decoration: none;
        cursor: normal;
      }

      section {
        margin: 20px 0 40px 0;
      }
      
      #content {
        position: relative;
      }
      
      .instruction {
        display: block;
        width: 183px;
        height:  157px;
        position: absolute;
        top: 0;
        right: 0;
        background-image: url('<?php echo get_template_directory_uri(); ?>/img/example-palette.png');
        background-repeat: no-repeat;
      }

      #oxygen-palette .row-fluid > a {
        text-align: center;
        border-radius: 5px;
        padding: 16px inherit;
        margin-top: 20px;
        overflow: visible;
        display:  block;
        color: #fff;
        font-weight: 300;
        text-shadow: rgba(0,0,0,0.15) 0px 1px 2px;
      }
      
      .row-fluid > a.span1,
      .row-fluid > a.span6 {
          box-shadow: inset rgba(0,0,0,0.1) 0px -2px 3px, inset rgba(255,255,255,0.75) 0px 1px 1px, rgba(0,0,0,0.15) 0px 1px 2px;
      }
      
      .row-fluid > a.span1:active,
      .row-fluid > a.span1:focus,
      .row-fluid > a.span6:active,
      .row-fluid > a.span6:focus {
          box-shadow: inset rgba(0,0,0,0.0) 0px -2px 3px, inset rgba(0,0,0,0.2) 0px 1px 15px, rgba(0,0,0,0.05) 0px 1px 2px;
          text-decoration: none;
      }
      
      #oxygen-palette .row-fluid .span4,
      #named-colors .row-fluid .span4 {
        text-align: right;
        font-weight: 700;
        font-size: 18pt;
        line-height: 20px;
      }
      
      #named-colors .row-fluid > a {
        text-align: center;
        border-radius: 5px;
        padding: 16px 0;
        margin-top: 20px;
        overflow: visible;
        display: block;
        color: #fff;
        font-weight: 300;
        text-shadow: rgba(0,0,0,0.15) 0px 1px 2px;
      }
      
      div.white {
        text-shadow:#cdcdcd 0px 2px 7px, #eee 0px -1px 2px
      }
      
      div.white-bg {
        border: 1px solid #fafafa;
      }
      
      .tooltip.in {
        opacity: 1;
      }
      
      a[data-toggle="tooltip"] + div.tooltip .tooltip-inner {
            font-size: 12pt;
            box-shadow: rgba(0,0,0,0.2) 0px 5px 15px;
            color: #333333;
            background-color: #ffffff;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
            opacity: 1;
          }
          
      a[data-toggle="tooltip"] + .tooltip.top .tooltip-arrow {
        border-top-color: #fff;
      }
      
      @media (max-width: 500px) {
      
        .row-fluid .span4 {
          text-align: center !important;
        }
        
      }
      
      @media (max-width: 767px) {
      
        .instruction {
          display: none !important;
        }
      
      }
    
    </style>
    
  <!-- JavaScript Section -->
    <script type="text/javascript">
      $(document).ready(function(){
      
        $('#oxygen-palette a, #named-colors a').click(function(e) {
          e.preventDefault();
        });
        
        if ($(window).width() > 767) {
        	$('#example').tooltip('show');
        };
               
        setTimeout(function() { $(".instruction").fadeOut("slow"); }, 4000);
        setTimeout(function() { $("#example").tooltip('hide') }, 4500);
                                   
      });
    </script>
  
  </div><!-- #content -->
</div><!-- #primary -->
<?php get_footer(); ?>