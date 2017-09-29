<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->
  <div id="page" class ="container">
    <div class="row no-gutters">

      <div id ="content" role="main" class="col-12 col-md-8">

        <div class="wrap p-md-5 px-2 py-5">
          <div class="lineleft py-5"></div>
          <!-- Page content -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="d-flex flex-md-nowrap flex-wrap">
            <?php if(has_post_thumbnail()): ?>
              <div class="thumbails col-12 col-md-5">
                <a href="<?php the_permalink();?>">
                  <?php the_post_thumbnail('400X250'); ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="wrap col-12 col-md-7 mt-md-0 ml-md-5 mt-3">
              <div class="title mb-3">
                <h2>
                  <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                  </a>
                </h2>
              </div>
              <div class ="small" style ="opacity:0.6;">
                <span class="postdate"><?php echo get_the_date('Y-m-d')?><?php echo " | "?></span>
                <span class="menu d-inline-block text-danger"><?php the_category() ?></span>
                <span class="tags"><?php echo " | "?><?php the_tags(); ?></span>
              </div>
              <div class="body">
                 <?php the_content(); ?>
              </div>
            </div>
          </article>

          <hr>

          <?php endwhile;?>

          <?php the_posts_pagination(array(
	             'mid_size'  => 3,
	              'prev_text' => __( 'prev', 'textdomain' ),
	               'next_text' => __( 'Next →', 'textdomain' ),
               ) );
          ?>

        <?php endif; ?>
        </div>

      </div>
      <div id ="sidebar-first" class="col-12 col-md-4">
        <div class="p-md-5 px-2 py-5">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
