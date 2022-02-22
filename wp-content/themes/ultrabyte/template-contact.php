<?php 
/* Template Name:Contact Us*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?> 
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="page-colored-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header-lg">
                        <h4>
                            LET’S WORK
                            TOGETHER
                        </h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="row mb-4">
                        <div class="col-lg-4 ">
                            <div class="ub-contact-box">
                                <div class="ub-contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="ub-contact-label">
                                    <?php the_field('location',185); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ub-contact-box">
                                <div class="ub-contact-icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="ub-contact-label">
                                     <?php the_field('phone_number',185); ?> ,
                                      <?php the_field('landline_number',185); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ub-contact-box">
                                <div class="ub-contact-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <div class="ub-contact-label">
                                     <?php the_field('email',185); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                             <?php echo do_shortcode('[contact-form-7 id="197" title="Contact Us"]');?>

                </div>
                <div class="col-lg-6">
                    <div class="contact-map-box">
                        <div class="contact-map">
                          <?php the_field('map',185); ?>

               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }}get_footer(); ?>