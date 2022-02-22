<?php 
/* Template Name:Career*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?> 
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="page-colored-in">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <div class=" typo-global">
                        <h4 class="mb-4">
                         Join Our Team
                     </h4>
                     <?php the_content(); ?>
                 </div>
             </div>
             <div class="col-lg-6 text-center">
                <div class="join-image img-full">
                    <img src="<?php the_post_thumbnail_url(); ?> " alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
            $args = array(
                'post_type' => 'career',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'post_status' => 'publish'
            );
            $vacancy =  get_field('no_of_vacancy');
            $query = new WP_Query( $args);
            if( $query->have_posts() ) { while( $query->have_posts() ) { $query->the_post(); 
                ?>
                <?php if(get_field('no_of_vacancy')){ ?> 
                    
                   <div class="col-lg-4">
                    <div class="box-notif">
                        <div class="position-ttl">
                            <a href="<?php the_permalink(); ?>"> 
                               <?php the_title(); ?>
                           </a>
                       </div>
                       <div class="position-count">
                        <span><?php the_field('no_of_vacancy'); ?></span>
                    </div>
                </div>
            </div>
        <?php }else{ ?>
         <div class="col-lg-4">
            <div class="box-notif notif-inactive">
                <div class="position-ttl">
                        <?php the_title(); ?>
                </div>
                <div class="position-count">
                    <span><?php the_field('no_of_vacancy'); ?></span>
                </div>
            </div>
        </div>
    <?php }}}wp_reset_postdata(); ?>
</div>


</div>
</section>
<!-- modal box -->

<?php }}get_footer(); ?>
