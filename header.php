<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/vs.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <title><?php the_title();?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="header-top">
      <div class="container">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'menu menu-header' ) ); ?>
      </div>
    </div>
    <header id="header">
      <!-- Header content -->
      <div class="wrap container py-5">
        <div class="d-flex align-items-center">
          <div class ="p-3">
            <img src="<?php echo get_template_directory_uri().'/image/logo.png'?>" width="300">
            <!--
            <div><?php bloginfo();?></div>
            <div><?php bloginfo('description') ?></div>
            -->
          </div>
        </div>
      </div>
    </header>
