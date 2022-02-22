<?php 
/* Template Name:Blog*/
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?> 
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="page-lite-in">
        <div class="container">
            <div class="row">
                <?php 
                $args = array(
                    'post_type' => 'post',
                    'orderby' => 'date',
                    'order' => 'dsc',
					'posts_per_page' => '999',
                    'post_status' => 'publish'
                );
                $query = new WP_Query( $args);
                if( $query->have_posts() ) { while( $query->have_posts() ) { $query->the_post(); 
                        ?>
                <div class="col-lg-4 p-4">
                    <div class="skew-box">
                        <div class="skew-box-image img-full">
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                        </div>
                        <div class="skew-box-caption typo-global">
                            <h5>
                              <?php
                                $terms = get_the_terms($post->ID, 'category');
                                $numItems = count($terms);
                                $i = 0;
                                foreach ($terms as $term) {
                                    if (++$i === $numItems) {
                                        echo $term->name;
                                    } else
                                        if ($count > 1) {
                                            echo $term->name . ' / ';
                                        } else {
                                            echo $term->name . '/';
                                        }
                                }
                                ?>
                            </h5>
                            <h4>
                                <?php the_title(); ?>
                            </h4>
                            <p>
                                <?php
                                          echo wp_trim_words( get_the_content(), 30, '...' );
                                          ?>        
                                      </p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="anc-overlay-an"></a>
                    </div>
                </div>
               <?php }}wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php }}get_footer(); ?>