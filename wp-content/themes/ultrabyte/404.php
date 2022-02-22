<?php 
get_header(); 


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
                            Page not Found .........
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="blog-featured-image">
                        <img class="img-responsive xyz"
                   src="<?php echo get_stylesheet_directory_uri() . '/images/error.png'; ?>"
                   alt="Oops This page is not found">
                    </div>
                </div>
            </div>
        </div>
    
    </section>
<?php get_footer(); ?>