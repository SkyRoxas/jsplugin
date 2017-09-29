<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->
  <div id="page" class ="container">
    <div class="row no-gutters">

      <div id ="content" role="main" class="col-8">

        <div class="wrap p-5">
          <div class="lineleft py-5"></div>
          <!-- Page content -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="d-flex ">
            <?php if(has_post_thumbnail()): ?>
              <div class="thumbails">
                <a href="<?php the_permalink();?>">
                  <?php the_post_thumbnail('400X250'); ?>
                </a>
              </div>
            <?php endif; ?>
            <div class="wrap ml-5">
              <div class="title mb-3">
                <a href="<?php the_permalink();?>">
                  <h2><?php the_title(); ?></h2>
                </a>
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
      <div id ="sidebar-first" class="col-4">
        <div class="p-5">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
