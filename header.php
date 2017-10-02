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

    <!--Google ads-->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3273735728404530",
        enable_page_level_ads: true
      });
    </script>

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
            <a href="/"><img src="<?php echo get_template_directory_uri().'/images/logo.png'?>" width="250"></a>
            <div class="p-3">
              <div style="font-style:italic;"><?php bloginfo();?></div>
              <div class="small"><?php bloginfo('description') ?></div>
            </div>
          </div>
          <div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- 台灣函式庫-layout-970X250 -->
            <ins class="adsbygoogle"
                 style="display:inline-block;width:970px;height:250px"
                 data-ad-client="ca-pub-3273735728404530"
                 data-ad-slot="7648310688"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
        </div>
      </div>
    </header>
