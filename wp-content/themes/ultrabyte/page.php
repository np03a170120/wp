<?php 
get_header(); 

if(have_posts()) { while(have_posts()){ the_post();

    ?>
    <section class="inner-nav">
<?php get_template_part('navigation'); ?>
    </section>
    <section class="inner-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="inner-header-light">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="blog-featured-image">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="post-share-list">
						<h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="par-glob blog-par">
                      
                        <?php the_content(); ?>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
<?php }}get_footer(); ?>