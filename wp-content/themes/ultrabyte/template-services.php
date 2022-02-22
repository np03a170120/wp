<?php 
/* Template Name:Services*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?>  
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="inner-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <header class="section-header text-center">
                        <h3>
                            OUR SERVICES
                        </h3>
                    </header>
                </div>
            </div>
            <div class="row">
                <?php 
                $args = array(
                    'post_type' => 'services',
                    'orderby' => 'menu_order',
                    'order' => 'ASC',
                    'post_status' => 'publish'
                );
                $counter = 0;
                $query = new WP_Query( $args);
                if( $query->have_posts() ) { while( $query->have_posts() ) { $query->the_post(); 
                    if( $counter % 2 == 0 ) {
                        ?>
                        <div class="col-lg-12">
                            <div class="row mb-40px">
                                <div class="col-lg-4">
                                    <div class="round-icon-box">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('services'); ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="content-sum-box">
                                        <header class="content-header">
                                            <h4>
                                                 <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                                </a>
                                            </h4>
                                        </header>
                                        <p class="content-par-fancy m-normal">
                                          <?php
                                          echo wp_trim_words( get_the_content(), 40, '...' );
                                          ?>        
                                      </p>
                                      <a href="<?php the_permalink(); ?>" class="more-anchor more-par">
                                         Read More
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php }else{ ?>
                    <div class="col-lg-12">
                        <div class="row mb-40px">
                            <div class="col-lg-3">

                            </div>
                            <div class="col-lg-4 max">
                                <div class="round-icon-box ">
                                     <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('services'); ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="content-sum-box">
                                    <header class="content-header">
                                        <h4>
                                             <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?></a>

                                        </h4>
                                    </header>
                                    <p class="content-par-fancy m-normal">
                                        <?php
                                        echo wp_trim_words( get_the_content(), 40, '...' );
                                        ?>                                            
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="more-anchor more-par">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 min">
                                <div class="round-icon-box ">
                                     <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('services'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  } $counter++; }}wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php }}get_footer(); ?>