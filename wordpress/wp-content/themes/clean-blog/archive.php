<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header() ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header') ?>
  <!-- Page Header-->
  <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <div class="site-heading">
            <?php if (is_category()) : ?>
              <h1>Category</h1>
            <?php elseif (is_author()) : ?>
              <h1>Author</h1>
            <?php elseif (is_date()) : ?>
              <h1>Date</h1>
            <?php else : ?>
              <h1>Tag</h1>
            <?php endif; ?>
            <span class="subheading"><?php wp_title(''); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content-->
  <div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <?php if (have_posts()) : ?>
        <div class="col-md-10 col-lg-8 col-xl-7">
          <?php while (have_posts()) : the_post(); ?>
            <div class="post-preview">
              <a href="<?php the_permalink() ?>">
                <h2 class="post-title">
                  <?php the_title(); ?><br />
                </h2>
                <h3 class="post-subtitle">
                  <?php the_excerpt(); ?><br />
                </h3>
              </a>
              <p class="post-meta">Posted by
                <?php the_author() ?>
                on September 24, 2019 <?php the_time(get_option('date_format')); ?>
              </p>
            </div>
            <hr>
          <?php endwhile; ?>
          <!-- Pager-->
          <div class="clearfix">
            <?php
            $link = get_previous_posts_link('&larr; Newer post');
            if ($link) {
              $link = str_replace('<a', '<a class="btn btn-primary float-start"', $link);
              echo $link;
            }
            ?>

            <?php
            $link = get_next_posts_link('Older post &rarr;');
            if ($link) {
              $link = str_replace('<a', '<a class="btn btn-primary float-end"', $link);
              echo $link;
            }
            ?>
          </div>
        </div>
      <?php else : ?>
        <p>Not Found Article</p>
      <?php endif; ?>

    </div>
  </div>
  <?php get_template_part('includes/footer') ?>
  <?php get_footer() ?>
</body>

</html>
