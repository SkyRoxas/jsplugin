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

          <article>
            <?php get_template_part('/template-parts/breadcrumb','yoast' ) ?>
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
      <div id ="sidebar-first" class="col-12 col-md-4">
        <div class="p-md-5 px-2 py-5">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

  </div>

  <?php get_footer(); ?>

<!--</body>-->
