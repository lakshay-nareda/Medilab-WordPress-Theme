<?php /* Template Name: Hero */?>

<?php get_header(); ?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
<?php $query = new WP_Query (
  array( 
    'post_type' => 'hero',
   )
) ;
?>
<?php while ($query->have_posts()) : $query->the_post(); ?>


    <div class="container">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_content(); ?></h2>
        <a href="#about" class="btn-get-started scrollto"><?php the_field('text') ?></a>
    </div>


    <?php endwhile; ?>
</section><!-- End Hero -->