   <?php /* Template Name: Doctor */
    get_header(); ?>


   <!-- ======= Doctors Section ======= -->
   <section id="doctors" class="doctors">
     <div class="container">

       <div class="section-title">
         <h2>Doctors</h2>
         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
       </div>


       <div class="row">
         <?php
          $args = array(
            'post_type' => 'doctor', // Replace this with your custom post type name
            'post_status' => 'published',
            'order' => 'ASC',
            'posts_per_page' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'Doc_Categories', // Replace this with your taxonomy name
                'field'    => 'name',
                'terms'    => 'doctors', // Replace this with your term value
              ),
            ),
          );

          $query = new WP_Query($args);


          while ($query->have_posts()) :

            $query->the_post();
          ?>
           <div class=" col-lg-6 mt-4 ">
             <div class="member d-flex align-items-start">
               <div class="pic">
                 <!-- <img src="<php echo bloginfo('template_directory'); ?>/assets/img/doctors/doctors-1.jpg" class="img-fluid" alt=""> -->
                 <?php the_post_thumbnail('thumbnail'); ?>
               </div>
               <div class="member-info">
                 <h4><?php the_title(); ?></h4>
                 <span><?php the_field('dr_name'); ?></span>
                 <p><?php the_content(); ?></p>
                 <div class="social">
                   <a href=""><i class="ri-twitter-fill"></i></a>
                   <a href=""><i class="ri-facebook-fill"></i></a>
                   <a href=""><i class="ri-instagram-fill"></i></a>
                   <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                 </div>
               </div>
             </div>
           </div>
         <?php
          endwhile;



          ?>

       </div>

     </div>
   </section><!-- End Doctors Section -->

   <? get_footer(); ?>