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

          <article>
            <div class="title mb-5">
              <a href="<?php the_permalink();?>">
                <h1><?php the_title(); ?></h1>
              </a>
            </div>
            <div class="body">
               <?php the_content(); ?>
            </div>
          </article>

          <?php endwhile; else : ?>
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
