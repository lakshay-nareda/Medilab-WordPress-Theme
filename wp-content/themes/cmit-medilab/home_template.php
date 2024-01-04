<?php /* Template Name: home */  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php get_header(); ?>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1><?php the_field('text',27); ?></h1>
      <h2><?php the_field('hero_des',27); ?></h2>
      <a href="#about" class="btn-get-started scrollto"><?php the_field('hero_btn',27); ?></a>
    </div>
  </section>
  <!-- <section id="hero" class="d-flex align-items-center">
    <?php $query = new WP_Query(
      array(
        'post_type' => 'hero',
      )
    );
    ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>


      <div class="container">
        <h1><?php the_title(); ?></h1>
        <h2><?php the_content(); ?></h2>
        <a href="#about" class="btn-get-started scrollto"><?php the_field('text') ?></a>
      </div>


    <?php endwhile; ?>
  </section> -->
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3><?php the_field('metxt',27); ?></h3>
              <p><?php the_field('me_text_des',27); ?></p>
              <div class="text-center">
                <a href="#" class="more-btn"><?php the_field('me_txt_btn',27); ?><i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <?php if(have_rows('temp_box',27)) : while(have_rows('temp_box',27)) : the_row(); ?>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><?php echo get_sub_field('temp_box_title',27); ?></h4>
                    <p><?php echo get_sub_field('temp_box_des',27); ?></p>
                  </div>
                </div>
                <?php endwhile; endif; ?>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <!-- <section id="why-us" class="why-us">
      <div style="margin-top: 150px;" class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <?php
            $query = new WP_Query(
              array(
                'order' => 'ASC',
                'post_type' => 'whyme',
                'posts_per_page' => 1,

              )
            );
            ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
              <div class="content">
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php the_content(); ?>
                </p>
                <div class="text-center">
                  <a href="#" class="more-btn"><?php the_field('metxt'); ?><i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <?php
            $query = new WP_Query(
              array(
                'order' => 'DESC',
                'post_type' => 'whyme',
                'posts_per_page' => 3,

              )
            );
            ?>
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <?php while ($query->have_posts()) : $query->the_post(); ?>

                  <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="icon-box mt-4 mt-xl-0">
                      <i class="bx bx-receipt"></i>
                      <h4><?php the_title(); ?></h4>
                      <p><?php the_content(); ?></p>
                    </div>
                  </div>
                <?php endwhile; ?>
              </div>


            </div>
          </div>
        </div>

      </div>
      </div>
    </section> -->
    <!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            <a href="<?php the_field('about_video',27)  ?>" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3><?php the_field('video_title', 27); ?></h3>
            <p><?php the_field('video_des', 27); ?>.</p>

            <?php if (have_rows('icon_box', 27)) : while (have_rows('icon_box', 27)) : the_row(); ?>
                <div class="icon-box">
                  <div class="icon"><i class="bx bx-fingerprint"></i></div>
                  <h4 class="title"><a href=""><?php echo get_sub_field('icon_title', 27); ?></a></h4>
                  <p class="description"><?php echo get_sub_field('icon_des', 27); ?></p>
                </div>
            <?php endwhile;
            endif; ?>

          </div>
        </div>

      </div>
    </section>
    <!-- ======= Counts Section ======= -->
    <section style="margin-top: 150px;"  id="counts" class="counts">
      <div class="container">

        <div class="row">
        <?php $arg = array(
            'post_type'=>'doctor',
        ); 
        $postCount = new WP_Query($arg);
        // echo '<pre>';
        // print_r($postCount->found_posts);
        // die('died');
        ?>
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $postCount->found_posts; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div>


          <?php 
          $aarg = array(
            'post_type'=>'department',
          );
          $counted = new WP_Query($aarg);
        //   echo '<pre>';
        //   print_r($counted->found_posts);
        //   die('dead');
           ?>
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $counted->found_posts; ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title">
          <?php
          $args = array(
            'post_type' => 'service', // Replace this with your custom post type name
            'post_status' => 'published',
          );
          $query = new WP_Query($args);
          while ($query->have_posts()) :
            $query->the_post();
          ?>

            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>

      <?php
          endwhile;
      ?>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form">
          <?php echo do_shortcode('[contact-form-7 id="a9d24d9" title="Make an Appointment"]');  ?>
          <!-- <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div> -->
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
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
                <!-- <input type="hidden" data-cat_id=<php echo $category_classes; ?> > -->
                  <a  id="demo" class="nav-link <?php if($count == 1){ echo 'active show'; } ?>" data-bs-toggle="tab" href="<?= $value->slug; ?>"  data-categories_depart="<?= $value->slug; ?>"><?= $value->name; ?> </a>
                </li>
                <?php
                    }
                  $count++;
                }
                }
          ?>
        </ul>
      </div>
      <div class="col-lg-9">
        <div class="tab-content" id="post_data">
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
                
              <div class="tab-pane <?php if($count == 1){ echo 'active'; } ?>">
                <div class="row gy-4 active show title1">
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
</section>><!-- End Departments Section -->

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
                  <span><?php the_field('designation'); ?></span>
                  <p><?php the_content(); ?></p>
                  <div class="social">
                    <a href="<?php the_field('twitter_url') ; ?>" target="_blank" ><i class="ri-twitter-fill"></i></a>
                    <a href="<?php the_field('facebook_url'); ?>" target="_blank" ><i class="ri-facebook-fill"></i></a>
                    <a href="<?php the_field('instagram_url'); ?>" target="_blank" ><i class="ri-instagram-fill"></i></a>
                    <a href="<?php the_field('linkedin_url'); ?>" target="_blank" > <i class="ri-linkedin-box-fill"></i> </a>
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

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <!-- <php
      $args = array(
        'post_type' => 'asked',
        'post_status' => 'published',
        'order' => 'ASC',
        'posts_per_page' => -1,
      );
      $query = new WP_Query($args);
      ?> -->
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <?php
            $num = 1;
            if (have_rows('asked_que', 27)) {
              while (have_rows('asked_que', 27)) {

                the_row();
            ?>
                <li data-aos="fade-up">
                  <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list<?php echo $num; ?>"><?php echo get_sub_field('faq_que', 27); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="faq-list<?php echo $num; ?>" class="collapse " data-bs-parent=".faq-list">
                    <p><?php echo get_sub_field('faq_ans', 27); ?></p>
                  </div>
                </li>
            <?php
                $num++;
              }
            }
            ?>
          </ul>
        </div>

      </div>

    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'post_type' => 'slider',
              'post_per_page'

            );
            $query = new WP_Query($args);

            while ($query->have_posts()) :
              $query->the_post();
            ?>
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="testimonial-img" alt="">
                    <h3><?php the_title(); ?></h3>
                    <h4><?php the_field('slid_text'); ?></h4>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i><?php the_content(); ?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
            <?php endwhile; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row g-0">
          <?php
          if (have_rows('image', 27)) {
            while (have_rows('image', 27)) {
              the_row();
          ?>
              <div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                  <a href="<?php echo get_sub_field('gallery', 27); ?>" class="galelry-lightbox">
                    <img src="<?php echo get_sub_field('gallery', 27); ?>" alt="" class="img-fluid">
                  </a>
                </div>
              </div>
          <?php
            }
          }
          ?>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3550.441029821664!2d75.72700757536404!3d27.142410650181866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396dab99a7b1a57f%3A0x5874e00855371369!2sK.%20R.%20Memorial%20Hospital!5e0!3m2!1sen!2sin!4v1701253204666!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <?php echo do_shortcode('[contact-form-7 id="115f784" title="Contact form 1"]'); ?>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
          <?php get_footer();?>

</body>

</html>