<?php

/*Template Name: Test*/

get_header();

$args = array(
  'post_type' => 'gallery',
  'order' => 'ASC',
  'posts_per_page' => -1,
);
    // $args = array(
    //   'post_status' => 'published',
    //   // 'posts_per_page' => ,
    //   'post_type'=>'gallery',
    //   'p'=> 127,
    // );

    $all_posts = new WP_Query($args);

    while($all_posts->have_posts()) : $all_posts->the_post();

 ?>

    <!-- <h2><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>

    <p><?php the_content(); ?></p> -->

<?php
endwhile;
get_footer();

?>