<?php /* Template Name: Hero Section */

?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>
        <?php comments_template( true ); ?>
      <?php endwhile; // end of the loop. ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<?php $query = new WP_Query (
  array( 
    'post_type' => 'hero',
   )
) ;
?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>


    <div class="container">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_content(); ?></h2>
        <a href="#about" class="btn-get-started scrollto"><?php the_field('text') ?></a>
    </div>


    <?php endwhile; ?>
</section><!-- End Hero -->