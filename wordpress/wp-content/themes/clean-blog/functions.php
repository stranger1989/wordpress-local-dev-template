<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
});

function get_eye_catch_with_default()
{
  if (has_post_thumbnail()) :
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else :
    $img = array(get_template_directory_uri() . '/img/post-bg.jpg');
    var_dump($img);
  endif;
  return $img;
}
