<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header() ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('includes/header'); ?>
  <!-- Page Header -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php
      $img = get_eye_catch_with_default();
      ?>
      <header class="masthead" style="background-image: url('<?php echo $img[0] ?>')">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <div class="post-heading">
                <h1><?php the_title() ?></h1>
                <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                <span class="meta">Posted by
                  <a href="#"><?php the_author() ?></a>
                  on <?php the_date() ?></span>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Post Content -->
      <article>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              <?php the_content() ?>
            </div>
          </div>
        </div>
      </article>
      <hr>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer() ?>
</body>

</html>
