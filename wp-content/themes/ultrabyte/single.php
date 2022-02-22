<?php 
   get_header(); 
   
   if(have_posts()) { while(have_posts()){ the_post();
   
       ?>
<section class="inner-nav">
    <?php get_template_part('navigation'); ?>
</section>
<section class="inner-page-wrapper">
    <div class="container">
        <!-- <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="inner-header-light">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                </div>
                <div class="blog-dtl">
                    <ul>
                        <li>
                            <?php echo get_the_date('M d ,Y'); ?>
                        </li>
                        <li>
                            <?php echo do_shortcode('[post-views]'); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p-0 xc">
                <div class="blog-featured-image custom-size-image">
                    <div class="inner-header-light">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </div>
                    <div class="blog-dtl">
                        <ul>
                            <li>
                                <?php echo get_the_date('M d ,Y'); ?>
                            </li>
                            <li>
                                <?php echo do_shortcode('[post-views]'); ?>
                            </li>
                        </ul>
                    </div>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                        title="<?php the_title(); ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row custom-padding">
            <div class="col-lg-2">
                <div class="post-share-list">
                    <ul>
                        <li>
                            <?php echo do_shortcode('[do_widget id=a2a_share_save_widget-2]'); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="par-glob blog-par">
                    <?php 
                  the_content();
                  if(comments_open() || get_comments_number()) 
                  comments_template();
               ?>
                </div>

                <?php 
               $categories = get_the_category($post->ID);
                     if ($categories) 
                     {
                        $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                           $args = array(
                              'category__in'          => $category_ids,
                              'post__not_in'          => array($post->ID),
                              'posts_per_page'        =>3, // Number of related posts that will be shown.
                              'ignore_sticky_posts'   =>1
                           );

                        $related_post_query = new wp_query($args);
                        if($related_post_query->have_posts()) 
                        {
            ?>
                <div class="related-articles">
                    <div class="rela-title">
                        <h4>Related Articles</h4>
                    </div>
                    <div class="row">
                        <?php 
                     while($related_post_query->have_posts()) 
                     {
                        $related_post_query->the_post();
                  ?>
                        <div class="col-md-4">
                            <div class="rela-single">
                                <div class="rela-image">
                                    <?php the_post_thumbnail('medium');?>
                                </div>

                                <div class="rela-bottom">
                                    <div class="rns-date">
                                        <span>
                                            <?php the_time('M j, Y') ?>
                                        </span>
                                    </div>
                                    <div class="relas-title">
                                        <a href="<?php esc_html(the_permalink());?>">
                                            <h6><?php esc_html(the_title()); ?></h6>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                        }
               ?>
                    </div>
                </div>
                <?php 
                   } 
                  }
                  wp_reset_query();
            ?>
            </div>
            <div class="col-lg-3">
                <div class=" category">
                    <h4 class="cat"> Category</h4>
                </div>
                <ul class="cons">
                    <?php 
                  $args = array(
                      'taxonomy'      => 'category',
                      'orderby'       => 'name',
                      'order'         => 'ASC',
                      'hide_empty'    => 1,
                      
                  );
                  $subcat = get_categories($args);
                  foreach($subcat as $sub):
                     if(!($sub->count)==0):
               ?>
                    <a href="<?php echo get_category_link( $sub->term_id ) ;?>">
                        <li class="lists">
                            <?php echo $sub->name.' ('.$sub->count.')'; ?>
                        </li>
                    </a>
                    <?php
                     endif;
                  endforeach;
               ?>
                </ul>

                <div class="recent-article">
                    <div class="ra-title">
                        <h4>Recent Articles</h4>
                    </div>
                    <?php 
                     $recent_posts = new WP_Query();
                     $recent_posts->query(array(
                        'showposts' => 5,  
                        'post__not_in' => array(get_the_ID())
                     ));
                     while ($recent_posts->have_posts()) : 
                        $recent_posts->the_post();
                  ?>
                    <div class="recent-article-single">
                        <div class="rns-date-title-wrapper">
                            <div class="rns-title">
                                <a href="<?php esc_url(the_permalink()); ?>">
                                    <h6>
                                        <?php esc_html(the_title());?>
                                    </h6>
                                </a>
                            </div>
                            <div class="rns-date">
                                <span>                               
                                    <?php echo get_the_date('M d ,Y'); ?>
                                </span>
                            </div>
                        </div>
                        <div class="rns-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                    <?php 
                     endwhile;
                     wp_reset_postdata();
                  ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php }}get_footer(); ?>