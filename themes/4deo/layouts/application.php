<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Fourdeo &middot; Ahoy!</title>
    <meta name="description" content="Fourdeo are the developers of Anchor, the art-directed CMS, and Sailboat, the Rails-esque framework for PHP.">
    <meta name="author" content="http://fourdeo.com/humans.txt">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="<?php echo $themeurl; ?>favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $themeurl; ?>apple-touch-icon.png">
     
    <link rel="stylesheet" href="<?php echo $themeurl; ?>stylesheets/fourdeo.css?v=0.12">
    
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="<?php echo $themeurl; ?>javascript/fourdeo.js"></script>
  </head>
  <body>
    <?php render('layouts/_menu'); ?>
    
    <section id="banner">
      <a href="http://outboardcms.com/latest/"><img src="<?php echo $themeurl; ?>images/outboard_banner.jpg" alt="Introducing Outboard. Click this to download it for free!"><span>&nbsp;</span></a>
    </section>
    
    <ul id="thumbs">
      <li><a href="#" title="Words Of Wisdom"><img src="<?php echo $themeurl; ?>images/wisdom.jpg" /><span>&nbsp;</span></a></li>
      <li><a href="#" title="The Theme Factory"><img src="<?php echo $themeurl; ?>images/factory.jpg" /><span>&nbsp;</span></a></li>
      <li><a href="#" title="Our Blog"><img src="<?php echo $themeurl; ?>images/blog.jpg" /><span>&nbsp;</span></a></li>
    </ul>
    
    <footer id="footer">
      <p>
        <strong>Copyright &copy; Fourdeo 2011. All rights reserved.</strong>
        
        <span>Follow us on Twitter! <a href="http://twitter.com/fourdeo">We're @fourdeo.</a></span>
      </p>
      
      <nav>
        <ul>
          <li><strong><a href="#">Fourdeo</a></strong></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Our Blog</a></li>
          <li><a href="http://twitter.com/fourdeo">@fourdeo</a></li>
        </ul>
        <ul>
          <li><strong><a href="#">Anchor</a></strong></li>
          <li><a href="#">Themes <em class="amp">&amp;</em> Plugins</a></li>
          <li><a href="#">Showcase</a></li>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">Download</a></li>
        </ul>
        <ul>
          <li><strong><a href="#">Outboard</a></strong></li>
          <li><a href="#">Snippets <em class="amp">&amp;</em> Themes</a></li>
          <li><a href="#">Showcase</a></li>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">Github</a></li>
          <li><a href="#">Download</a></li>
        </ul>
        <ul>
          <li><strong><a href="#">Boathouse</a></strong></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Features</a></li>
          <li><a href="#">Try free</a></li>
        </ul>
        <ul>
          <li><strong><a href="#">Sailboat</a></strong></li>
          <li><a href="#">Source</a></li>
          <li><a href="#">Documentation</a></li>
          <li><a href="#">Github</a></li>
          <li><a href="#">Download</a></li>
        </ul>
        <ul>
          <li><strong><a href="#">Support</a></strong></li>
          <li><a href="#">Forums</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </footer>
  </body>
</html>