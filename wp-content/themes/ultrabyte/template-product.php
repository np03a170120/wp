<?php 
/* Template Name:Product*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?>  
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="team-top-section page-lite-in">
        <div class="container">
            <?php 
            $args = array(
                'post_type' => 'product',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'post_status' => 'publish'
            );
            $counter = 0;
            $query = new WP_Query( $args);
            if( $query->have_posts() ) { while( $query->have_posts() ) { $query->the_post(); 
                if( $counter % 2 == 0 ) {
                    ?>
                    <div class="row mtb-60">
                        <div class="col-lg-6">
                            <div class="img-fancy img-full">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="desc-fancy">
                                <h3>
                                 <?php the_title(); ?>
                             </h3>
                             <?php the_content(); ?>
                         </div>
                     </div>
                 </div>
             <?php }else{ ?>
                <div class="row mtb-60">
                    <div class="col-lg-6">
                        <div class="desc-fancy">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-fancy img-full">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php  } $counter++; }}wp_reset_postdata(); ?>
        </div>
    </section>
    <?php }}get_footer(); ?>