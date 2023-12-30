<?php /* Template Name: New Department */
get_header(); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<section id="departments" class="departments">
  <div class="container">

    <div class="section-title">
      <h2>Departments</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-3 department-tab ">`
        <ul class="nav nav-tabs flex-column">
          <?php
          $terms = get_terms(array(
            'post_type' => 'department',
            'taxonomy'   => 'categories_depart',
            'hide_empty' => false,
          ));
          ?>
         
          <?php
          $count = 1;
          if ($terms) {
            foreach ($terms as $value) {
              if (!empty($value->count)) { ?>
                <li class="nav-item" id="nav-item" >
                  <a  id="demo" class="nav-link  <?php if($count == 1){ echo 'active show'; } ?>" data-bs-toggle="tab" href="#<?= $value->slug; ?>"  data-categories_depart="<?= $value->name; ?>"><?= $value->name; ?> </a>
                </li>
                <?php
                    }
                  $count++;}
                }
          ?>
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="tab-content">
          <?php
          $args = array(
            'post_type' => 'department',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
          );
          $the_query = new WP_Query($args);
          ?>
            
          <?php
          if ($the_query->have_posts()) ?>

            <?php
           $count = 1;
            while ($the_query->have_posts()) {
              $the_query->the_post();
             
              $terms = get_the_terms(get_the_ID(), 'categories_depart');
              if ($terms) {
                $category_classes = '';
                foreach ($terms as $term) {
                  $category_classes .= '' . $term->slug;
                } 
                ?>
              <div class="tab-pane  <?php if($count == 1){ echo 'active'; } ?>" id="<?= $category_classes; ?>"  >
                <div class="row gy-4 active show title1" >
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3  > <?php the_field('depart_title'); ?></h3>
                    <p class="fst-italic"><?php the_field('depart_dis');  ?></p>
                    <p><?php the_field('depart_contant'); ?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
          <?php }
             $count++; }
          wp_reset_query();
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>

  </div>
</section>

<script>
  function contentData(){

    $(document).ready(function(){
      $('#demo').click(function(){
        $('.tab-pane').show();
      })
    })
  }
</script>

<?php get_footer(); ?>