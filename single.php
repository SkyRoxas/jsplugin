<!--<body>-->

  <!--<header>-->
  <?php get_header(); ?>
  <!--</header>-->
  <div id="page" class ="container py-5">

    <div class="wrap row">

      <div class="col-9">

        <div id ="content" role="main">

          <!-- Page content -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article>
            <div class="title mb-5">
              <h1>
                <a href="<?php the_permalink();?>">
                  <?php the_title(); ?>
                </a>
              </h1>
            </div>
            <div class="body">
               <?php the_content(); ?>
            </div>
          </article>

          <?php endwhile; else : ?>
        <?php endif; ?>

        </div>

      </div>
      <div class="col-3">
        <?php get_sidebar(); ?>
      </div>


    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
