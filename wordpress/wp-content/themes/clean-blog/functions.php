<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');

  register_nav_menus([
    'global_nav' => 'global navigation'
  ]);
});

function get_eye_catch_with_default()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    $img = array(get_template_directory_uri() . '/assets/img/post-bg.jpg');
  endif;
  return $img;
}
